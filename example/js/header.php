<script>
    var edittext = document.getElementById('editText');
    var link1 = document.getElementById('link1').innerHTML;
    edittext.style.display = 'none';

    
function edit(){
    edittext.style.display = 'block';
}
function change(){
var title1 = document.getElementById('title1').value;
    // link1.innerHTML = title1;
    alert(link1);
}
</script>