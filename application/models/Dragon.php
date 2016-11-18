<?php
class Dragon extends CI_Model {

	public function create($dragon)
	{
		$query = "INSERT INTO dragons(name, color, element, moves, created_at, updated_at) VALUES (?,?,?,?, NOW(), NOW())";
		$values = array($dragon['name'],$dragon['color'],$dragon['element'],$dragon['moves']);

		$this->db->query($query, $values);
	}
	public function index()
	{
		$query = "SELECT * FROM dragons";
		return $this->db->query($query)->result_array();
	}
	public function show($id)
	{
		$query = "SELECT * FROM dragons WHERE id = '{$id}'";
		return $this->db->query($query)->row_array();
	}
	public function update($dragon, $id)
	{
		$query = "UPDATE dragons SET name = ?, color = ?, element = ?, moves = ?, updated_at = NOW() WHERE id = ?";
		$values = array($dragon['name'], $dragon['color'],$dragon['element'],$dragon['moves'], $id);
		$this->db->query($query, $values);
	}
	public function destroy($id)
	{
		$query = "DELETE FROM dragons WHERE id = ?";
		$this->db->query($query, $id);
	}
}
