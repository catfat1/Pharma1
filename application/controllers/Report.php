<?php
class Report extends CI_Controller {
 
	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('report_model');
		$this->load->model('reporter_model');
		$this->load->model('patients_model');
		$this->load->model('suspect_drug_model');
		$this->load->model('concomitant_drug_model');
		$this->load->model('adr_model');
		$this->load->model('lab_model');


		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}


	public function create(){
	$this->form_validation->set_rules('report_desc', 'report_desc', 'required');

	$report_id = $this->report_model->set_reports();

	$data['report']=$this->report_model->get_reports($report_id);
	$data['tab'] = 'reporter';
	$data['position'] = 'complain';
	$this->load->view('home/index',$data);
	
	//$this->load->view('home/index#complain"',$data);



	}





	/*this functions are used to show reports*/

	public function show_home()
	{
		
        $data['tab'] = 'report';
		 $this->load->view('home/index');

	}

	public function show_report_content()
	{
		$data=array('all_reports'=>$this->report_model->get_report());

		   $this->load->view('home/report_content',$data);


	}



function show_report_content_using_ajax()

{
	$id= $this->input->get('report_id');
	//echo $id; 
	//echo 'yarab';
	//exit;
 	// $this->load->view('home/report_content');

	
	//$data=array('all_reports_with_id'=>$this->report_model->get_report_with_report_id($id));

	$data['all_reports_with_id']=$this->report_model->get_report_with_report_id($id);
	//$data=array('all_reports'=>$this->report_model->get_report());

	//$data=$this->report_model->get_report_with_report_id($id);

	
 	$this->load->view('home/show_report_content_using_ajax',$data);
	//$this->load->view('home/report_content',$data);



	//echo var_dump($data); exit;

}


	public function show_report()
	{

		$data=array('all_reports'=>$this->report_model->get_report());


		   $this->load->view('home/report',$data);
	}


	public function show_reporter()
	{

		//to get the value of report id when click on reporter
		  
		$reporter_report_id=$this->input->get('report_reporter_id');


		$data=array('all_reporters'=>$this->reporter_model->get_reporter($reporter_report_id));


			if(isset($data))
		   $this->load->view('home/reporter',$data);
			else echo "noooooooooooo";


	}

		/*$data=array('all_reports'=>$this->report_model->get_report());
		$this->load->view('home/index',$data);*/




	public function show_patient()
	{

		//to get the value of report id when click on patient
		  
		$report_patient_id=$this->input->get('report_patient_id');
		


		$data=array('all_patients'=>$this->patients_model->get_patient($report_patient_id));

		$this->load->view('home/patient',$data);


	}


	public function show_suspect_drug()
	{

		$suspect_drug_report_id=$this->input->get('suspect_drug_report_id');
		


		$data=array('all_suspect_drugs'=>$this->suspect_drug_model->get_suspect_drug($suspect_drug_report_id));

		$this->load->view('home/suspect_drug',$data);

	}


	public function show_concomitant_drug()
	{

		$concomitant_drug_report_id=$this->input->get('concomitant_drug_report_id');
	
		$data=array('all_concomitant_drugs'=>$this->concomitant_drug_model->get_concomitant_drug($concomitant_drug_report_id));

		$this->load->view('home/concomitant_drug',$data);

	}


	public function show_adr()
	{

		$adr_report_id=$this->input->get('adr_report_id');
	
		$data=array('all_adrs'=>$this->adr_model->get_adr($adr_report_id));

		$this->load->view('home/adr',$data);

	}


	public function show_lab()
	{

		$lab_report_id=$this->input->get('lab_report_id');
	
		$data=array('all_labs'=>$this->lab_model->get_lab($lab_report_id));

		$this->load->view('home/lab',$data);

	}
		/* end of the  function is used to show reports*/






	
}
?>
