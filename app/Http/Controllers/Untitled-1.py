# shop/models.py
from django.db import models

class Category(models.Model):
    name = models.CharField(max_length=100)
    description = models.TextField()

    def __str__(self):
        return self.name

class Product(models.Model):
    name = models.CharField(max_length=100)
    category = models.ForeignKey(Category, on_delete=models.CASCADE)
    description = models.TextField()
    price = models.DecimalField(max_digits=10, decimal_places=2)
    stock = models.IntegerField()
    image = models.ImageField(upload_to='products/')

    def __str__(self):
        return self.name
# shop/views.py
from django.shortcuts import render, get_object_or_404
from .models import Category, Product

def product_list(request):
    products = Product.objects.all()
    return render(request, 'shop/product_list.html', {'products': products})

def category_list(request):
    categories = Category.objects.all()
    return render(request, 'shop/category_list.html', {'categories': categories})

def product_detail(request, id):
    product = get_object_or_404(Product, id=id)
    return render(request, 'shop/product_detail.html', {'product': product})
# shop/urls.py
from django.urls import path
from . import views

urlpatterns = [
    path('', views.product_list, name='product_list'),
    path('categories/', views.category_list, name='category_list'),
    path('product/<int:id>/', views.product_detail, name='product_detail'),
]
<!-- templates/shop/product_list.html -->
<h1>Product List</h1>
<ul>
    {% for product in products %}
        <li>
            <a href="{% url 'product_detail' product.id %}">{{ product.name }}</a> - ${{ product.price }}
        </li>
    {% endfor %}
</ul>
<!-- templates/shop/category_list.html -->
<h1>Category List</h1>
<ul>
    {% for category in categories %}
        <li>{{ category.name }}</li>
    {% endfor %}
</ul>
<!-- templates/shop/product_detail.html -->
<h1>{{ product.name }}</h1>
<p>Category: {{ product.category.name }}</p>
<p>{{ product.description }}</p>
<p>Price: ${{ product.price }}</p>
<p>Stock: {{ product.stock }}</p>
<img src="{{ product.image.url }}" alt="{{ product.name }}">
python manage.py runserver
