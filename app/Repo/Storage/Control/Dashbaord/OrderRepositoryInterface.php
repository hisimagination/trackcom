<?php

namespace Repository\Storage\Order;

interface OrderRepositoryInterface {
	public function all();
	public function find($id);
	public function paginate();
	public function create($data);
	public function update($id);
	public function destroy($id);

	public function instance();
}