<?php

namespace Cox\Storage\Group;

interface GroupRepositoryInterface {

	public function all();

	public function find($id);

	public function store($input);

	public function update($id, $input);

	public function destroy($id);

}