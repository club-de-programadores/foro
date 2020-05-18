from django.shortcuts import render, redirect
from Usuarios.models import User
from Usuarios.forms import manager_form
from  django.urls import reverse_lazy
from django.views.generic import UpdateView
# Create your views here.



def index(request):
    profile = User.objects.all()
    return render(request, "main.html", {'profile': profile})


class miembroEditar(UpdateView):
    model = User
    form_class = manager_form
    template_name = 'index.html'
    success_url = reverse_lazy('home')


def save_form(request):
    if request.method == 'POST':
        form = manager_form(request.POST)
        if form.is_valid():
            form.save()
        return redirect('/listo/')
    else:
        form = manager_form()



def user_modific2(request):
	if request.method == 'POST':
		form = manager_form(request.POST)
		if form.is_valid():
			form.save()
			return redirect('/listo/')
	else:
		form = manager_form()
	return render(request, "register.html", {'form': form})


def user_modific(request):
    user = User.objects.get(id = 2)
    if request.method == 'GET':
        form = manager_form(instance=user)
    else: 
        form = manager_form(request.POST, instance=user)
        if form.is_valid():
            form.save()
        return redirect('/listo/')

    return render(request, "register.html", {'form': form})

