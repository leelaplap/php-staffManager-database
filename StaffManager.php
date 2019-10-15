<?php


class StaffManager
{
    protected $conn;

    public function __construct()
    {
        $db = new DBConnect("mysql:host=localhost;dbname=staffManager", "dat", "1");
        $this->conn = $db->connect();
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM staffs';
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $staffs = [];
        foreach ($result as $value) {
            $staff = new Staff($value['staffsName'], $value['age'], $value['phone']);
            $staff->id = $value['id'];
            array_push($staffs, $staff);
        }

        return $staffs;
    }

    public function addStaff($staff)
    {
        $stmt = $this->conn->prepare('INSERT INTO staffs(staffsName,age,phone) VALUES(:staffsName,:age,:phone)');
        $stmt->bindParam(':staffsName',$staff->name);
        $stmt->bindParam(':age',$staff->age);
        $stmt->bindParam(':phone',$staff->phone);
        $stmt->execute();
    }

    public function delete($index)
    {
        $stmt = $this->conn->prepare('DELETE FROM staffs WHERE id=:id');
        $stmt->bindParam(':id',$index);
        $stmt->execute();
    }

    public function edit($id,$object){
        $stmt = $this->conn->prepare('UPDATE staffs SET staffsName=:staffsName,age=:age,phone=:phone WHERE id=:id');
        $stmt->bindParam(':staffsName',$object->name);
        $stmt->bindParam(':age',$object->age);
        $stmt->bindParam(':phone',$object->phone);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }
}