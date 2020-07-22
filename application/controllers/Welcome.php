<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('queries');
		$bankBranches = $this->queries->getBankBranches();
		$this->load->view('welcome_message', ['bankBranches'=>$bankBranches]);
		//echo '<pre>';
		//print_r($bankBrances);
		//echo '</pre>';
		//exit();
	}

	public function create() {
		$this->load->view('create');
	}

	public function update($bank_branch_id) {
		$this->load->model('queries');
		$bankBranches = $this->queries->getSingleBankBranch($bank_branch_id);
		$this->load->view('update', ['bankBranches' =>$bankBranches]);
		//echo $bank_branch_id;
		//$this->load->view('update');
	}

	public function save() {
		$this->form_validation->set_rules('bank_branch_id', 'Bank Branch Id', 'required');
		$this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
		$this->form_validation->set_rules('bank_branch_name', 'Bank Branch Name', 'required');
		$this->form_validation->set_rules('bank_branch_code', 'Bank Branch Code', 'required');
		
		if ($this->form_validation->run())
		{
			$data = $this->input->post();
			$today = date('Y-m-d');
			$data['date_created'] = $today;
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->addBranch($data)){
				$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><h4 class="text-center"><i class="fas fa-check"></i> Bank-Branch Added Successfully!</h4></div>');
			}else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><h4 class="text-center">Failed to Save Bank-Branch details!</h4></div>');
			}
			return redirect('welcome');
		 	//echo '<pre>';
		 	//print_r($data);
		 	//echo '</pre>';
		 	//exit();
		}
		else {
			$this->load->view('create');
		}
	}

	public function change($bank_branch_id) {
		$this->form_validation->set_rules('bank_branch_id', 'Bank Branch Id', 'required');
		$this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
		$this->form_validation->set_rules('bank_branch_name', 'Bank Branch Name', 'required');
		$this->form_validation->set_rules('bank_branch_code', 'Bank Branch Code', 'required');
		
		if ($this->form_validation->run())
		{
			$data = $this->input->post();
			$today = date('Y-m-d');
			$data['date_created'] = $today;
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->updateBranch($data, $bank_branch_id)){
				$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><h4 class="text-center"><i class="fas fa-check"></i> Bank-Branch Updated Successfully!</h4></div>');
			}else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><h4 class="text-center">Failed to Update Bank-Branch details!</h4></div>');
			}
			return redirect('welcome');
		}
		else {
			$this->load->view('create');
		}
	}

	public function delete($bank_branch_id) {
		$this->load->model('queries');
		if($this->queries->deleteBranch($bank_branch_id)){
			$this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert"><h4 class="text-center"><i class="fas fa-check"></i> Bank-Branch Deleted Successfully!</h4></div>');
		}else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><h4 class="text-center">Failed to Delete Bank-Branch details!</h4></div>');
		}
		return redirect('welcome');
	}
}
