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

   //validation

   function validate(){

        //category
       if(form.categoryId.value=="1"){
            alert("Please select category");
            focus.form.categoryId;
            preventDefault();
       }
            
       //age
        if(form.age.value==""){
            alert("Please type your age");
            focus.form.age;
        }else if(isNaN(document.form.age.value)){
            alert("Please do not enter the charactors for age");
            focus.form.age;
        }

        //NIC Number
        if(form.nic.value==""){
            alert("NIC number  should not be null");
            focus.form.nic;
        }
        
        if(form.nic.value.length==10){
            var lastLetter=form.nic.value[form.nic.value.length-1];
            var onlyNICnum=form.nic.value.slice(0,form.nic.value.length-1);

            if(!(lastLetter=="v"||lastLetter=="V"||lastLetter=="x"||lastLetter=="X" && isNaN(onlyNICnum))){
                alert("Please enter valid NIC number");
            }
        }else if(form.nic.value.length==13){
            if(isNaN(document.form.nic.value))
                alert("Please enter valid NIC number");
        }else{
            alert("Please enter valid NIC number");
        }
        
        //description
        if(form.description.value==""){
            alert("Please fill the patient's description");
            focus.form.description;
        }

        //address
        if(form.address.value==""){
            alert("Please fill the patient's address");
            focus.form.address;
        }

        //phone number
        var isvalidPhone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

        if(form.phoneNumber.value==""){
            alert("Please Enter your Phone number");
            focus.form.phoneNumber;
        }else if(!form.phoneNumber.value.match(isvalidPhone)){
            alert("Please enter valid Phone number");
            focus.form.phoneNumber;
        }

        //donation amount
        if(form.rqAmount.value==""){
            alert("Please fill donation amount that you want");
            focus.form.rqAmount;
        }

        //required date
        if(form.date.value==""){
            alert("Please enter the date that you want donation");
            focus.form.date;
        }

        //bank name
        if(form.bankName.value==""){
            alert("Please enter Bank name");
            focus.form.bankName;
        }
        //bank account number
        if(form.acNum.value==""){
            alert("Please enter Account number of the bank");
            focus.form.acNum;
        }

        //branch name
        if(form.brName.value==""){
            alert("Please enter branch name of the bank");
            focus.form.brName;

        }

        //patient picture
        if(form.patient_pic.value==""){
            alert("Please upload patient picture");

        }

         //medical report
         if(form.med_repo.value==""){
            alert("Please upload medical report");

        }
       
   }

   