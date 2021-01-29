<?php

class AdminModel extends Model
{
    public function login() {
        $result = false;
        if(trim($_POST['login']) == ADMIN_LOGIN && $_POST['pass'] == ADMIN_PASS)
        {
            $result = true;
        }
        return $result;
    }

    public function getTasks() {
        $sql = "SELECT * FROM tasks";
        $data = $this->db->query($sql);
        return $data->rows;
    }

    public function getTask($id = 0) {
        $sql = "SELECT * FROM tasks WHERE id = ".(int)$id;
        $data = $this->db->query($sql);
        return $data->row;
    }
    public function getText($id = 0) {
        $sql = "SELECT text FROM tasks WHERE id = ".(int)$id;
        $data = $this->db->query($sql);
        return $data->row['text'];
    }
    public function save()
    {
        $result = false;
		$origtext = $this->getText($_POST['id']);
		$status='Новая';
        $text = $this->db->escape($_POST['text']);
        if(isset($_POST['done']))
        {
            $status = 'Выполнено';
			if($text!=$origtext){
				$status = 'Выполнено и изменено';
			}
        }
		elseif($text!=$origtext){
			$status = 'Изменено';
		}
		if($_SESSION['logged'] == true){
        $sql = "UPDATE tasks SET text = '$text',status = '$status' WHERE id = ".(int)$_POST['id'];
		}
        if($this->db->query($sql))
        {
            $result = true;
        }
        return $result;
    }
}