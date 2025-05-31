//  Navbar javascript.....

const home = document.getElementById("home");
const shop = document.getElementById("shop");
const review = document.getElementById("review");
const blog = document.getElementById("blog");
const contact = document.getElementById("contact");

home.addEventListener("click",()=>{
    home.style.color="#e74c3c";
    shop.style.color="white";
    review.style.color="white";
    blog.style.color="white";
    contact.style.color="white";
});

shop.addEventListener("click",()=>{
    
    shop.style.color="#e74c3c";
    review.style.color="white";
    blog.style.color="white";
    contact.style.color="white";
});

review.addEventListener("click",()=>{
    
    shop.style.color="white";
    review.style.color="#e74c3c";
    blog.style.color="white";
    contact.style.color="white";
});

blog.addEventListener("click",()=>{
    
    shop.style.color="white";
    review.style.color="white";
    blog.style.color="#e74c3c";
    contact.style.color="white";
})

contact.addEventListener("click",()=>{

    shop.style.color="white";
    review.style.color="white";
    blog.style.color="white";
    contact.style.color="#e74c3c";
})

//  Shop item javascript..


const item = document.querySelectorAll(".item");
const itempage = document.querySelector(".itempage");
const container = document.querySelector(".container")
const itemimg = document.getElementById("itemimg")
const buytext = document.getElementById("buytext");

let buypage = document.getElementsByClassName("buypage");

//console.log(item);
item.forEach((currvalue)=>{
  currvalue.addEventListener("click",()=>{
    itempage.style.display="flex";
    container.style.display="none";
      
    let imgsrc = currvalue.firstElementChild.src;
    itemimg.src=imgsrc;

    buybtn.addEventListener("click",()=>{

      document.querySelector(".buypage").style.display="block";
      document.querySelector(".buytext").innerHTML=`
          <h2>Enter Eetails</h2>
         <label for="name">Name</label>
         <input type="text" id="names" placeholder="Enter name"><br/>

         <label for="address">Address</label>
         <input type="text" id="address" placeholder="Enter address"><br/>

         <label for="phone">Phone</label>
         <input type="phone" id="phone" placeholder="Enter phone"><br/>

         <h2>Payment Option</h2>

         <select>
            <option value="Google-pay">Google-pay</option>
            <option value="Phone-pay">Phone-pay</option>
            <option value="Cash-on-delivery">Cash-on-delivery</option>
         </select></br>
           
  
          `

          let button = document.createElement("button");
          button.innerText="Submit";
          buytext.appendChild(button);

          button.addEventListener("click",()=>{
            let name = document.getElementById("names");
            if(name.value=="")
            {
              alert("Please fill details.");
            }
            else
            {
              alert("Congratulations your details saved successful.");
              document.querySelector(".buypage").style.display="none";
            }
          });


          let cross = document.querySelector(".cross");
          cross.addEventListener("click",()=>{
            document.querySelector(".buypage").style.display="none";
          });




    });


  })
});


//  Contact Us javascript.. 

function submit(){
  let name = document.getElementById("name");
  let number = document.getElementById("number");

  if(name.value=="" || number.value=="")
  {
    alert("Please fill details.");
  }
  else
  {
    alert("Your details saved successful.");
  }

}

