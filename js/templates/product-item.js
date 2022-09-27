

export const item = (product) => {
  return `
    <li class="item">
    <div class="product__block js_product glass glass-m" id="${product.id}">
    <div class="product__image-block">
     <img src="${product.image}" alt="" class="img">
    </div>
    <div class="text-block">
    <div class="product__text-box">
    <p class="product__name js_product-name">${product.name}</p>
      <span class="product__price">$${(product.price).toFixed(2)}</span>
    </div>
    <div class="product__btn-block">
    <a href="product-page.html?id=${product.id}" class="btn btn--first" style="margin: ${product.isItRing ? 'auto' : ''}">details</a>
    ${
      product.isItRing ? '' : '<button class="btn js_add-to-cart">buy</button>'
    }
    </div>
    </div>


    </div>
    </li>
    `
  }