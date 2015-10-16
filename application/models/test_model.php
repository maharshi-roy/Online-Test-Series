<?php

class Test_model extends CI_Model {

	public function add($data) {

		$data_db = array(

			'subject' => $data['subject'],
			'statement' => $data['statement'],
			'option_1' => $data['options'][0],
			'option_2' => $data['options'][1],
			'option_3' => $data['options'][2],
			'option_4' => $data['options'][3],
			'answers' => implode(" ", $data['answers']),
			'difficulty' => $data['difficulty'],
			'instructor' => $this->session->userdata('name')

			);

		$this->db->insert('tests', $data_db);

	}

	public function questions($subject, $difficulty) {

		$this->db->where(['subject' => $subject, 'difficulty' => $difficulty]);

		$query = $this->db->get('tests');

		if($query->num_rows()) {

			$table_name = $this->session->userdata('user')."testdata";

			$str = "CREATE TABLE $table_name (id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT, statement VARCHAR(255), option_1 VARCHAR(255), option_2 VARCHAR(255), option_3 VARCHAR(255), option_4 VARCHAR(255), answers VARCHAR(255), useranswers VARCHAR(255), instructor VARCHAR(255))";

			$this->db->query($str);

			foreach($query->result() as $row) {

				$data = array(

					'statement' => $row->statement,
					'option_1' => $row->option_1,
					'option_2' => $row->option_2,
					'option_3' => $row->option_3,
					'option_4' => $row->option_4,
					'answers' => $row->answers,
					'instructor' => $row->instructor

					);

				$this->db->insert($table_name, $data);

			}

			return TRUE;
		}

		else {

			return FALSE;
		}

	}

	public function getquestion($id) {

		$table_name = $this->session->userdata('user')."testdata";

		$this->db->where('id', $id);

		$query = $this->db->get($table_name);

		return $query->result();

	}

	public function sendanswer($id, $useranswers) {

		$table_name = $this->session->userdata('user')."testdata";

		$useranswers = implode(" ", $useranswers);

		$this->db->where('id', $id);

		$this->db->set('useranswers', $useranswers);

		$this->db->update($table_name);

		return NULL;

	}

	public function checker() {

		$table_name = $this->session->userdata('user')."testdata";

		$this->db->select('answers');

		$this->db->select('useranswers');

		$query = $this->db->get($table_name);

		$score = 0;

		foreach($query->result() as $check) {

			//echo $check->answers;
			//echo $check->useranswers;

			if ($check->answers == $check->useranswers) {

				$score += 4;
			}

			else {

				$score--;
			}
		}

		$this->db->query("DROP TABLE $table_name");

		return $score;
	}
}

?>