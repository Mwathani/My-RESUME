from django.db import models

# Create your models here.
class Contact(models.Model):
    name = models.CharField(max_length=30)
    email = models.EmailField()
    phone = models.CharField(max_length=10)
    message = models.TextField()

    def __str__(self):
        return f'{self.name}' + '-' + f'{self.email}' # This always returns string even if self.name is None
                                                        #You can do concantination i.e + '-' + f'{self.email}'

