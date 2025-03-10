<?php

class Files{
    public string $fileName;
    public string $fileExtension;
    public string $content;
    public string $parentFolder;

    public function __construct(string $fileName, string $fileExtension, string $content, string $parentFolder){
        $this->fileName = $fileName;
        $this->fileExtension = $fileExtension;
        $this->content = $content;
        $this->parentFolder = $parentFolder;
    }

    public function getLifetimeBandwidthSize(): string{
        $oneGb = 1000;
        if(25 * strlen($this->content) >= $oneGb){
            $maxFileSize = 25 * strlen($this->content) / $oneGb;
            return $maxFileSize . "GB";
        } else {
            $maxFileSize = 25 * strlen($this->content);
            return $maxFileSize . "MB";
        }
    }

    public function prependContent(string $data): string{
        return $this->content = $data . $this->content;
    }

    public function addContent(String $data, int $position): string{
        $this->content = substr($this->content, 0, $position) . "{$data}" . substr($this->content, $position);
        return $this->content;
    }

    public function showFileLocation(): string{
        return $this->parentFolder . " > " . $this->fileName . $this->fileExtension;
    }
}