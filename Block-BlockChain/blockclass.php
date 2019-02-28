<?php
class Block
{
    public $nonce;

    public function __construct($index, $data, $previousHash = null)
    {
        $this->index = $index;
        //$this->timestamp = $timestamp;
        $this->data = $data;
        $this->previousHash = $previousHash;
        $this->hash = $this->calculateHash();
        $this->nonce = 0;
    }

    public function calculateHash()
    {
        return hash("md5",$this->previousHash.$this->nonce);

        // return hash("md5", $this->index.$this->previousHash.((string)$this->data).$this->nonce);
    }
}
    