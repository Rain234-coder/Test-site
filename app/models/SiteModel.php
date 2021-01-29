<?php
class SiteModel extends Model
{
    private $allowed_types = array(
        'image/png',
        'image/jpeg',
        'image/gif'
    );

    public function getCount($status = 'Новая')
    {
        return $this->db->query("SELECT count(*) as n FROM tasks")->row['n'];
    }

    public function getTasks($offset, $limit, $sort = 'name', $order = 'ASC') {
        $sql = "SELECT * FROM tasks order by $sort $order";
        if($limit != 0) {
            $sql .= $this->db->escape(" LIMIT $offset, $limit");
        }
        $data = $this->db->query($sql);
        return $data->rows;
    }

    public function getTask($id = 0) {
        $sql = "SELECT * FROM tasks WHERE id = ".(int)$id;
        $data = $this->db->query($sql);
        return $data->row;
    }

    public function save() {
        $result = false;
        $name = $this->db->escape($_POST['name']);
        $email = $this->db->escape($_POST['email']);
        $text = $this->db->escape($_POST['text']);
        $sql = "INSERT INTO `tasks` (`id`, `name`, `email`, `text`,`status`) VALUES (NULL, '$name', '$email', '$text', 'Новая')";
        if($this->db->query($sql)) {
            $result = true;
        }

        return $result;
    }

    public function set_status($id = 0, $status = 'Новая')
    {
        $sql = "UPDATE tasks SET status = '$status' WHERE id = ".(int)$id;
        $this->db->query($sql);

    }
}