from django.shortcuts import render, HttpResponse
from base.models import Contact

# Create your views here.

def index(request):
    #return HttpResponse('<h1>This is my homepage(/)</h1>')

    #Django context 
    context = {'name':'Rooney Mwathani', 'programming': 'Django'}
    return render(request, 'index.php' , context)

def about(request):
    #return HttpResponse('<h1>This is my about page(/about)</h1>')
    return render(request, 'about.php')

def project(request):
    #return HttpResponse('<h1>This is my projects page(/projects)</h1>')
    return render(request, 'projects.php')

def contact(request):
    #return HttpResponse('<h1>This is my contact page(/contact)</h1>')

    if request.method == 'POST':
        #print('The post is saved')

        name = request.POST['name']
        email = request.POST['email']
        phone = request.POST['phone']
        message = request.POST['message']

        #print(name,email,phone,message)

        contact = Contact(name = name, email = email, phone = phone, message = message)
        contact.save()
        print('The data has been submitted successfully to the database')

    return render(request, 'contact.php')
