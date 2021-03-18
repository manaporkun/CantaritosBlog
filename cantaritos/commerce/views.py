from django.shortcuts import render


def register(request):
    return render(request, 'commerce/signup.html')


def login(request):
    return render(request, 'commerce/login.html')
