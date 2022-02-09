export default class CartController {
        
    #baseurl;
        
        
    constructor() {
        
        this.baseurl = document.head.querySelector('meta[name="baseurl"]').getAttribute('content');
        this.bindEvents();
    }
    
    
    selectors(key) {
        
        const obj = {
            cartCount: '#shop-cart-count',
            addToCartBtn: '.add-to-cart-button',
            quantityField: '#quantity-field',
        }
        
        return obj[key];
    }
    
    
    variables = {
        cartItems: 0
    }
    
    
    dom = {
       cartCount: document.querySelector(this.selectors('cartCount')),
       addToCartBtns: document.querySelectorAll(this.selectors('addToCartBtn')),
       quantityField: document.querySelector(this.selectors('quantityField'))
    }
    
    
    bindEvents() {
        this.dom.addToCartBtns.forEach(btn => btn.addEventListener('click', this.functions.addToCart.bind(this)));
    }
    
    
    functions = {
        
        // Add to cart button
        addToCart(e) {
            e.preventDefault();
                        
            const _this         = e.target.closest(this.selectors('addToCartBtn')); // Get target element
            const productID     = _this.getAttribute('data-id'); // Get product ID
            const quantityField = this.dom.quantityField; // Get quantity field form product inner page (if it is)
            const quantity      = quantityField ? parseInt(quantityField.value) : this.variables.cartItems += 1; // Define product quantity. Quanity from products or from inner page.
            const count         = this.dom.cartCount.innerText.length ? parseInt(this.dom.cartCount.innerText) : 0;
            
            this.dom.cartCount.innerText = count + quantity;
            
            
            // Add product to the cart
            fetch(`${this.baseurl}/cart/${productID}`, {
                method: 'PATCH',
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    quantity,
                    product_id: productID
                })
            })
            .then(res => res.json())
            .then(res => {
                const key = Object.keys(res)[0]
        
                UIkit.notification({
                    message: res[key],
                    status: key,
                    pos: 'top-center',
                    timeout: 5000
                });
            })
            .catch(err => console.log(err))
        }
    }
}