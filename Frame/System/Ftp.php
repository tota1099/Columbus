<?php

namespace FRAME\system;

class Ftp
{
	public $file;
	public $allowed_types;
	private $fileDir;
	private $fileName;
	private $fileType;
	private $fileSize;
	private $fileError;
	private $uploadMaxSizeMB = __UPLOAD_MAX_SIZE_MB;
	private $uploadMinSizeMB = __UPLOAD_MIN_SIZE_MB;

    public function uploadFile()
    {
    	try{
    		$this->setVariablesFile();
    		$this->checkSize();
    		$this->uploadFileToServer();
    	}
    	catch(\Exception $e){
	       throw new \Exception($e->getMessage());
    	}
    }

    private function checkSize()
    {
    	if($this->uploadMaxSizeMB > 0 && $this->fileSize > ($this->uploadMaxSizeMB * 1024 * 1000)) {
            throw new \Exception('Tamanho máximo de upload excedido! Tamanho máximo: '.$this->uploadMaxSizeMB.'MB.');
        }
        if($this->uploadMinSizeMB > 0 && $this->fileSize < ($this->uploadMinSizeMB * 1024 * 1000)) {
            throw new \Exception('Arquivo pequeno. Tamanho mínimo: '.$this->uploadMinSizeMB.'MB.');     
        }  
    }

    private function setVariablesFile()
    {
        if ( $this->file ) {
            $this->fileName = $this->file['name'];
            $this->fileType = $this->file['type'];
            $this->fileSize = $this->file['size'];
            $this->fileDir = $this->file['tmp_name'];
            $this->fileError = $this->file['error'];

            if ( empty($this->fileName) ) {
                throw new \Exception('Algum problema ocorreu! ##fileName');
            }
        } else {
            throw new \Exception('Nenhum arquivo importado!');
        }
	}

    private function uploadFileToServer()
    {
    	fopen($this->fileDir, "r");

        $conn_id = ftp_connect(FTP_HOST);
        $login_result = ftp_login($conn_id, FTP_USER, FTP_PASS);

        if (! ftp_put($conn_id, FTP_DIR_DEFAULT . $this->fileName, $this->fileDir, FTP_ASCII)) {
        		throw new \Exception('Algum problema ocorreu ao tentar efetuar o upload! ##ftpConnect');
        }
    }
}