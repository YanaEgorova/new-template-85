export const item = (product) => {

  return `
  <li class="item"> 
   <div class="product__block js_product glass glass-m" id="${product.id}">
      <div class="product__image-block">
          <img src="${product.image}" alt="" class="img">
      </div>
      <div class="text-block">
      <div class="text-box">
      <p class="product__name js_product-name">${product.name}</p>
      <span class="product__price">
      $${(product.price).toFixed(2)}
      </span>
      </div>
      <div class="product__btn-box">
      <a href="product-page.html?id=${product.id}" class="product__btn">product details</a>
      <button class="product__btn js_add-to-cart">add to cart</button>
      </div>
      </div>
    </div>
  </li>
    `
}


