<?php
App::uses('AppController', 'Controller');
/**
 * Materials Controller
 *
 * @property Material $Material
 * @property PaginatorComponent $Paginator
 */
class MaterialsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Material->recursive = 0;

		//paginacija(limit 4 materijala po strani)
		$this->Paginator->settings = array('all',
			'limit' => 5
		);
		$this->set('materials', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Material->exists($id)) {
			throw new NotFoundException(__('Invalid material'));
		}
		$options = array('conditions' => array('Material.' . $this->Material->primaryKey => $id));
		$this->set('material', $this->Material->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

	public function save($id = null) 	
	{
		//ako je request post
		if ($this->request->is('post') || $this->request->is('put')) {
			$result = $this->Material->saveMaterial($this->request->data, $id);
			//ako saveMaterial() nije success 
			if(!$result['success']){
				$this->Flash->error(__('The material could not be saved. Error: '.$result['message']));
				return $this->redirect(array('action' => 'index'));
			}else{
				$this->Flash->success(__('The material has been saved.'));
				return $this->redirect(array('action' => 'index'));			
			}
		} else {
			$options = array('conditions' => array('Material.' . $this->Material->primaryKey => $id));
			$this->request->data = $this->Material->find('first', $options);
		}
		//popuni liste
		$recommendedRatings = $this->Material->RecommendedRating->find('list', array('fields' => array('RecommendedRating.id', 'RecommendedRating.rating')));
		$materialStatuses = $this->Material->MaterialStatus->find('list', array('fields' => array('MaterialStatus.id', 'MaterialStatus.status')));
		//popuni listu sa uslovom da je ItemType klasa = materijal
		$itemTypes = $this->Material->Item->ItemType->find('list', array('conditions' => array('ItemType.class' => 'material')));
		
		$measurmentUnits = $this->Material->Item->MeasurmentUnit->find('list');
		$this->set(compact('recommendedRatings', 'materialStatuses', 'itemTypes', 'measurmentUnits', 'weights'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id) {
		
		//dozvoli samo request metode koje su post ili delete
		$this->request->allowMethod('post', 'delete');
		$result = $this->Material->deleteMaterial($id);
		if(!$result['success'])
		{
			$this->Flash->error(__('The material could not be deleted. Error: '.$result['message']));
			return $this->redirect(array('action' => 'index'));
		}
		else
		{
			$this->Flash->success(__('The material has been deleted.'));
			return $this->redirect(array('action' => 'index'));
		}
	}

	public function search()
    {
    	if ($this->request->is('post'))
	   	{
	      	if(!empty($this->request->data) && isset($this->request->data) )
	      	{
	         	$search_key = trim($this->request->data['Material']['search_key']);

	         	$conditions[] = array(
	         	"OR" => array(
	            	"Item.code LIKE" => "%".$search_key."%",
	            	"Item.name LIKE" => "%".$search_key."%",
	            	"Item.description LIKE" => "%".$search_key."%"
	            	)
	         	);
	      	}
	   	}

	   	$this->Paginator->settings = array('all',
	      	'conditions' => $conditions,
	      	'limit' => 5
	   	);

	   	$this->set('materials', $this->Paginator->paginate());

    	$this->render('/Materials/index');
    }	

	public function import_excel()
	{
		//Set page title
        $this->set('title_for_layout', 'Uvoz podataka iz excela');
		//set_time_limit(0);

        if ($this->request->is('post') || $this->request->is('put')) {

            //Init data
            $starting_row = 2;
            $active_sheet = 0;                           

            //Check for uploaded file
            if(empty($this->request->data['Material']['excel_file']['name'])){

            	throw new Exception('Fajl nije ispravno prenet! Pokušajte ponovo.');
            }
          
            //Check if uploaded file is in excel format
            $upload_name = $this->request->data['Material']['excel_file']['name'];

            if(substr($upload_name, -4) != '.xls' && substr($upload_name, -5) != '.xlsx'){

                throw new Exception('Fajl nije u Excel formatu!');
            }                     

            //Move uploaded file
            $file = $this->request->data['Material']['excel_file'];

            $file['name'] = date('Ymdhis-') . $file['name'];

            $dir = new Folder(TMP, true, 0755);

            $dest = TMP . $file['name'];


            if(!move_uploaded_file($file['tmp_name'], $dest)){

                throw new Exception('Fajl me nože biti prenet!');
            }
         
            //Init Excel
            App::import('Vendor', 'Excel', array('file' => 'phpexcel/excel.php'));


            $inputFileName = TMP.$file['name'];

            //Read your Excel workbook
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);

            $objReader = PHPExcel_IOFactory::createReader($inputFileType);

            $objPHPExcel = $objReader->load($inputFileName);

            //Set active sheet
            $objWorksheet = $objPHPExcel->setActiveSheetIndex($active_sheet);

            // Get worksheet dimensions
            $sheet = $objPHPExcel->getSheet(0);

            $highestRow = $sheet->getHighestRow();

            $highestColumn = $sheet->getHighestColumn();                              

            $order_record_count = 0;

            for ($row = $starting_row; $row <= $highestRow + 1; $row++){

                //Get row
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

                $form_data['Item']['code'] = $rowData[0][0];
                $form_data['Item']['name'] = $rowData[0][1];
                $form_data['Item']['description'] = $rowData[0][2];
                $form_data['Item']['weight'] = $rowData[0][3];
                $form_data['Item']['measurment_unit_id'] = $rowData[0][4];
                $form_data['Item']['item_type_id'] = $rowData[0][5];

                $form_data['Material']['material_status_id'] = $rowData[0][6];
                $form_data['Material']['service_production'] = $rowData[0][7];
                $form_data['Material']['recommended_rating_id'] = $rowData[0][8];

				$this->Material->saveMaterial($form_data);
            }                                  
        }
    }

    public function export_excel()
    {
    	//Init Excel
        App::import('Vendor', 'Excel', array('file' => 'phpexcel/excel.php'));

        //Generate file for Office 2003 XLS
        //$this->layout = 'xls'; //this will use the no layout

        $materials = $this->Material->find('all');
        $this->set('materials', $materials);

        $this->autoRender = false;

        $this->response->type('application/vnd.ms-excel');

        //Create objects
        $objExcel = new Excel();

        $objExcelWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel5'); 

        //Set objects
        $this->set('objExcel', $objExcel);

        $this->set('objExcelWriter', $objExcelWriter);

        //Render excel
        $this->render('index_excel');        
    }

    public function export_pdf()
    {
    	//Init PDF
		$pdf = null;
		while (!class_exists('PDF')) {
	        //Init PDF
	        App::import('Vendor', 'PDF', array('file' => 'tcpdf' . DS . 'pdf.php'));
		}

		$materials = $this->Material->find('all', array('recursive' => 2));
        $this->set('materials', $materials);

		$pdf = new PDF('L', 'mm','A4', true, 'UTF-8', false);
		 
		$filename = 'Materials.pdf';
		$this->set('filename', $filename);

		$this->set('pdf', $pdf);
		 
		$this->layout = 'pdf';

		$this->autoRender = false;

		$this->response->type('application/pdf');                   
		 
		$this->render('index_pdf');
    }
}
