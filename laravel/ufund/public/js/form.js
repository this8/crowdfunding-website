   // profile pic
   var profFile=document.getElementById("picFile");
   var profBtn=document.getElementById("patientPic");
   var profPath=document.getElementById("picName");

   profBtn.addEventListener("click",function(){
       profFile.click();
   });

   profFile.addEventListener("change",function(){
       profPath.innerHTML=profFile.value;
   });

   //medical report 
   var medFile=document.getElementById("repoFile");
   var medBtn=document.getElementById("medRepo");
   var medPath=document.getElementById("repoName");

   medBtn.addEventListener("click",function(){
       medFile.click();
   });

   medFile.addEventListener("change",function(){
       medPath.innerHTML=medFile.value;
   });

   //validatin

   function validate(){
       
       if(document.form.categoryId.value=="1000")
            alert("Please select catogory");

   }