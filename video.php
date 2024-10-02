<?php
interface video
{
    function getName();
    function getSource();
    function getEmbedCode();
}

abstract class abstractVideo implements video
{
    protected $name;
    protected $source;

    function __construct($name, $source)
    {
        $this->name = $name;
        $this->source = $source;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSource()
    {
        return $this->source;
    }

    abstract public function getEmbedCode();
}

class YouTube extends abstractVideo
{
    private $videoID;

    function __construct($videoID, $name)
    {
        parent::__construct($name, "YouTube");
        $this->videoID = $videoID;
    }

    public function getEmbedCode(): string
    {
        return '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $this->videoID . '"></iframe>';
    }
}

class Vimeo extends abstractVideo
{
    private $videoID;

    function __construct($videoID, $name)
    {
        parent::__construct($name, "YouTube");
        $this->videoID = $videoID;
    }

    public function getEmbedCode()
    {
        return '<iframe width="560" height="315" src="https://player.vimeo.com/video/' . $this->videoID . '"></iframe>';
    }
}
