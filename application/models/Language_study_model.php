<?php

class Language_study_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'language_study';
	}

	public function check_exists($where = array()) {
		return parent::check_exists($where); // TODO: Change the autogenerated stub
	}

	public function find_language_name($id) {
        $name = '';
        $input2 = array();
        $input2['where'] = array('id' => $id);
        $names = $this->load_all($input2);
        if (!empty($names)) {
            $name = $names[0]['name'];
        }
        return $name;
    }

}
