

var ShoppingCart = (function($) {
    // "use strict";

    // Cache necesarry DOM Elements
    var productsEl = document.querySelector(".products"),
        cartEl =     document.querySelector(".shopping-cart-list"),
        productQuantityEl = document.querySelector(".product-quantity"),
        totalItems = document.querySelector(".cart-quantity"),
        emptyCartEl = document.querySelector(".empty-cart-btn"),
        cartCheckoutEl = document.querySelector(".cart-checkout"),
        totalPriceEl = document.querySelector(".total-price"),
        countItems = 0;
    
    // Fake JSON data array here should be API call
    var products = [
      {
        id: 0,
        name: "iPhone 11",
        description: "Apple iPhone 11, 64GB, Black, Unlocked (Renewed Premium)",
        longDescription: "",
        imageUrl: "images/iphone11.JPG",
        price: 799
      },
      {
        id: 1,
        name: "iPhone 12",
        description: "Apple iPhone 12 Pro Max, 128GB, Graphite, Unlocked (Renewed Premium)",
        imageUrl: "images/iphone12.JPG",
        price: 1064,
      },
      {
        id: 2,
        name: "Macbook Pro 2019",
        description: "2019 Apple MacBook Pro, 16GB RAM, 1TB Storage, Space Gray",
        longDescription: "16-inch, 2.3GHz Intel Core i9, 16GB RAM, 1TB Storage, Space Gray",
        imageUrl: "images/macbook2019.JPG",
        price: 2899
        
      },
      {
        id: 3,
        name: "MSI Modern 2021",
        description: "MSI Modern 14 Professional Laptop, 16GB RAM, 512GB SSD, Beige Mousse",
        longDescription: "14-inch IPS-Level Thin Bezel Display, Intel Core i7-1165G7, NVIDIA GeForce MX450, 16GB RAM, 512GB NVMe SSD, Beige Mousse",
        imageUrl: "images/msi2021.JPG",
        price: 999
      },
      {
        id: 4,
        name: "Macbook Air 2020",
        description: "Apple MacBook Air 8GB RAM, 512GB Storage, Space Gray",
        longDescription: "13-inch, M1 7-core GPU, 8GB RAM, 512GB Storage, Space Gray",
        imageUrl: "images/macbook2020.JPG",
        price: 1199
      },
      {
        id: 5,
        name: "Lenovo Ideapad 2020",
        description: "Lenovo IdeaPad 3 11 Chromebook Laptop, 64GB RAM, 64GB eMMC, Onyx Black",
        longDescription: "11.6-inch, Intel Celeron N4020 Processor, 4GB LPDDR4 RAM, 64GB eMMC Storage, Onyx Black",
        imageUrl: "images/lenovo.JPG",
        price: 1499
        
      }
    ],
     productsInCart = [];
    
    // Pretty much self explanatory function. NOTE: Here I have used template strings (ES6 Feature)
    var generateProductList = function() {
      products.forEach(function(item) {
        var productEl = document.createElement("div");
        productEl.className = "product";
        productEl.innerHTML = `<div class="product-image">
                                  <img src="${item.imageUrl}" alt="${item.name}">
                               </div>
                               <div class="product-name"><span>Product:</span> ${item.name}</div>
                               <div class="product-description"><span>Description:</span> ${item.description}</div>
                               <div class="product-price"><span>Price:</span> ${item.price} $</div>
                               <div class="product-add-to-cart">
                                 <a href="#0" class="button see-more">More Details</a>
                                 <a href="#0" class="button add-to-cart" data-id=${item.id}>Add to Cart</a>
                               </div>
                            </div>
  `;
                               
  productsEl.appendChild(productEl);
      });
    }
    
    // Like one before and I have also used ES6 template strings
    var generateCartList = function() {
      
      cartEl.innerHTML = "";     
      
      productsInCart.forEach(function(item) {
        var li = document.createElement("li");
        li.innerHTML = `${item.quantity} ${item.product.name} - $${item.product.price * item.quantity}`;        
        // count = item.quantity;
        cartEl.appendChild(li);
      });
      
      productQuantityEl.innerHTML = productsInCart.length;    
    //    totalItems.innerHTML = count;
      generateCartButtons()
    }    
    
    // Function that generates Empty Cart and Checkout buttons based on condition that checks if productsInCart array is empty
    var generateCartButtons = function() {
      if(productsInCart.length > 0) {
        emptyCartEl.style.display = "block";
        cartCheckoutEl.style.display = "block"
        totalPriceEl.innerHTML = "$ " + calculateTotalPrice();
      } else {
        emptyCartEl.style.display = "none";
        cartCheckoutEl.style.display = "none";
        totalItems.innerHTML = "0";
      }
    }
    
    // Setting up listeners for click event on all products and Empty Cart button as well
    var setupListeners = function() {
      productsEl.addEventListener("click", function(event) {
        var el = event.target;
        var count = 0;
        if(el.classList.contains("add-to-cart")) {
         var elId = el.dataset.id;                  
         addToCart(elId);
        }
      });
      
      emptyCartEl.addEventListener("click", function(event) {
        if(confirm("Are you sure?")) {
          productsInCart = [];
        }
        generateCartList();
      });
    }
    
    // Adds new items or updates existing one in productsInCart array
    var addToCart = function(id) {
      var obj = products[id];
      countItems++;
      if(productsInCart.length === 0 || productFound(obj.id) === undefined) {
        productsInCart.push({product: obj, quantity: 1});        
      } else {
        productsInCart.forEach(function(item) {
          if(item.product.id === obj.id) {
            item.quantity++;                                  
          }                  
        });
      }
      totalItems.innerHTML = countItems;      
      generateCartList();
    }  
    
    
    // This function checks if project is already in productsInCart array
    var productFound = function(productId) {
      return productsInCart.find(function(item) {
        return item.product.id === productId;
      });
    }
  
    var calculateTotalPrice = function() {
      return productsInCart.reduce(function(total, item) {
        netTotal =total + ( item.product.price *  item.quantity );
        return netTotal * 1.10;       
        
      }, 0);
    }
    
    // This functon starts the whole application    
      generateProductList();
      setupListeners();   

      
      console.log(countItems);
});
  
  ShoppingCart();

  
  

  // open cart modal
const cart = document.querySelector('#cartIcon');
const cartModal = document.querySelector('.shopping-cart');

cart.addEventListener('click', () => {
    cartModal.style.display = "block";    
})
// end of open cart modal

// close cart modal
const closeBtn = document.querySelector ('#close-btn');

closeBtn.addEventListener('click', () => {
  cartModal.style.display = 'none';
});

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == cart) {
//       cartModal.style.display = "none";
//     }
//   }
// end of close cart modal