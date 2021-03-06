<?php
class HoleRequestSent extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function relations(){
		return array(
			'hole'=>array(self::BELONGS_TO, 'Hole', 'hole_id'),
			'user'=>array(self::BELONGS_TO, 'UserGroupsUser', 'user_id'),
		);
	}
 
	public function tableName()
	{
		return '{{hole_request_sent}}';
	}
	public function updateMail(){
		$barcode=$this->rcpt;
        //$barcode = '0103316290764'; // For testing purposes
        $guid = Yii::app()->params['guid'];
        $culture = Yii::app()->params['culture'];
        $response = "http://services.ukrposhta.ua/barcodestatistic/barcodestatistic.asmx/GetBarcodeInfo?guid=$guid&barcode=$barcode&culture=$culture";
	error_log ("Ukrposhta delivery check for: ".$barcode."\n", 3, "php-log.log");
        $xml=simplexml_load_file($response);
        //print_r($xml->code); //for testing purposes only
        if(in_array($xml->code,  $this->ukrpostcodes())){
            $this->ddate = date("Y-m-d", strtotime($xml->eventdate));
            $this->status=1;
            $this->description = $xml->eventdescription;
 	    error_log ("Ukrposhta: delivered on ".$this->ddate."\n", 3, "php-log.log");
            $this->update();
        }else{
	    error_log ("Ukrposhta: incorrect reponse / not delivered\n", 3, "php-log.log");
            return false;
        }

	}

    protected function ukrpostcodes(){
        return array(
            '41004', //Вручення за довіренністю
            '41002', //Вручення адресату особисто
            '41003', //Члену родини
            '41022'  //Вручення кур'єру
        );
    }
}
?>
