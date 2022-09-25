<?php
Class Form {
    var $fields=Array();
    var $action;
    var $submit=" ";
    var $jumField=0;

    function __construct($action,$submit){
        $this->action=$action;
        $this->submit=$submit;
    }

    function DisplayForm(){
        echo"<form action='".$this->action."'method='post'>";
        echo"<table width = '100%'>";
        for ($i=0;$i<$this->jumField;$i++)
        {
            echo"<tr>
                <td align='right'>".$this->fields[$i]['label']."</td>";
            echo"<td><input type='text' name='".$this->fields[$i]['name']."'></td>
            </tr>";
        }
    echo"<tr>
        <td><input type='submit' name='tombol' value='".$this->submit."'></td>
        </tr>";
    echo"</table>";    
    }

    function AddField($name,$label){
        $this->fields[$this->jumField]['name']=$name;
        $this->fields[$this->jumField]['label']=$label;
        $this->jumField++;
    }
}
?>