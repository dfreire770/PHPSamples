#pragma strict
var texto1:String="";
var texto2:String="";
var color:String="";
var textStyle = new GUIStyle();
//var color1:String="";

function Start () {
	getData();
}

function Update () {

}
function OnGUI(){
	//GUI.Label(new Rect(0,0,200,50),logo);
	
	//style.richText = true;
	GUI.Label(new Rect(30,25,200,50),"<color="+texto2+"></color>",texto1);
	//GUILayout.Label("<size=30><color="+color1+"></color></size>"+texto1,style);
	
}


function getData() {
	//GUI.Label(new Rect(20,50,200,50),"Datos:");

    var hs_get = WWW("http://localhost:8181/examen2/cliente.php");
	
    yield hs_get;
   
    if(hs_get.error) {
    	Debug.Log("Problema al cargar datos: " + hs_get.error);
    } else {
        //GUI.Label(new Rect(30,100,200,50),hs_get.text);  // this is a GUIText that will display the scores in game.
    	Debug.Log(hs_get.text);
    	texto1 = hs_get.text;
    	texto2 = texto1.Replace(" ", '');
    	
    	
    }
}