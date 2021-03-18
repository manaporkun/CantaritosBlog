from django.urls import path
from . import views

urlpatterns = [
    path('register/', views.register, name='cantaritos-register'),
    path('login/', views.login, name='cantaritos-login'),
]
