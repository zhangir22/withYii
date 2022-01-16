<?php
$jsonData = json_decode($jsonData);
$data = $jsonData->data;
$background = $jsonData->background;
$depth = $jsonData->depth;
$arrData = explode(',',$data);
function innerData($arrData){
    foreach($arrData as $item){
        echo '<li class="">'. $item .'</li>';
    }
}
if(preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $background)){
    echo '<div id="boxImg">';
    echo '<ul id = "ul-img">';
    innerData($arrData);
    echo '</ul>';
    echo '</div>';
}
else{

    echo '<div id="boxRgb">';
    echo '<ul id = "ul-rgb">';
    innerData($arrData);
    echo '</ul>';
    echo '</div>';
}


?>
<button id="btn" >Свернуть</button>
<script>
    const even = n => !(n % 2);

    function doAssembly(countClick){
        let li = null;
        let boxImg = document.getElementById('boxImg');
        let boxRgb = document.getElementById('boxRgb');
        if(boxImg != null){
            li = boxImg.getElementsByTagName('li');
        }
        if(boxRgb != null){
            li = boxRgb.getElementsByTagName('li');
        }
        let index = 0;
        let depth = Number(<?=$depth;?>);
        if(depth > li.length){
            depth = li.length;
        }
         if(!even(countClick)) {
            for(let i = 0 ; i < depth ; i++){
                li[i].style.visibility = 'hidden';
            }
         }
         else{
             for(let i = 0 ; i < depth ; i++){
                 li[i].style.visibility = 'visible';
             }
         }
    console.log(countClick)
    }

    let countClick = 0;

    document.getElementById('btn').onclick = function (){
        countClick++;
        doAssembly(countClick);

    }
</script>


<style>
    #boxImg{
        width:auto;
        height:auto;
        background: url(<?= $background?>);
        color: white;
    }
    #boxRgb{

        width:auto;
        height:auto;
        background-color: #<?=$background?>;
    }
    #ul-img,#ul-rgb li{
        list-style-type: none;
        font-family: "Microsoft JhengHei Light";
        font-size:20px;
        margin: 15px;

    }
</style>


