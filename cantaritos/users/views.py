from django.shortcuts import render,redirect
from django.contrib import messages
from .form import UserRegisterForm
from django.contrib.auth.decorators import login_required

def register(request):
    if request.method == 'POST':
        form = UserRegisterForm(request.POST)
        if form.is_valid():
            form.save()
            username = form.cleaned_data.get('username')
            messages.sucess(equest,f'Account created for {username}!')
            return redirect('login')
    else:
        form = UserRegisterForm()
    return render(request,'_users/register.html',{'form':form})

@login_required
def profile(request):
    return render(request,'users/profile.html')