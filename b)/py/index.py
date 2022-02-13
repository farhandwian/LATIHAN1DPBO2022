
# class Employee(object):
#  def __init__(self,__name,__age,__salary):
#    self.__name=__name
#    self.__age=__age
#    self.__salary=__salary

class Employee(object):
  name=''
  age='0'
  salary='0'

# class Player(Employee):
#  def __init__(self,__name,__age,__salary,__playerNumber,__role):
#   self.__playerNumber=__playerNumber
#   self.__role=__role
#   Employee.__init__(self,__name,__age,__salary)      

class Player(Employee):
  playerNumber=''
  role=''

n=100

class FootballTeam():
  teamName=''
  countryName=''
  established=''
  players = [Player() for i in range(n)]
  totalPlayer=0
  def __init__(self,teamName='',countryName='',established='',totalPlayer=''):
    self.teamName=teamName
    self.countryName=countryName
    self.established=established
    self.totalPlayer=totalPlayer
  def print(self):
    print("=================================================")
    print("nama tim "+self.teamName)
    print("nama negara dari tim "+self.countryName)
    print("tahun didirikan tim "+self.established)
    print("total pemain "+str(self.totalPlayer))
    print("\nDaftar Pemain")
    i=0
    for i in range(self.totalPlayer):
      print("----------------------------------------------")
      print("nama pemain "+self.players[i].name)      
      print("nama pemain "+self.players[i].playerNumber)
      print("nama pemain "+self.players[i].role)
      print("nama pemain "+self.players[i].age)
      print("nama pemain "+self.players[i].salary)
      print("----------------------------------------------")
    print("=================================================")
      
# #driver code
m=int(input("masukan banyak tim: "))
arrOfClass=[FootballTeam() for i in range(m)]
i=0
j=0
for i in range(m):
  namaTIm=input("masukan nama tim: ")
  namaNegara=input("masukan nama negara: ")
  didirikan=input("masukan tahun didirikan: ")
  jumlahPemain=int(input("masukan jumlah pemain: "))
  arrOfClass[i]=FootballTeam(namaTIm,namaNegara,didirikan,jumlahPemain)
  for j in range(jumlahPemain):
    namaPemain = input("masukan nama pemain: ")
    nomorPunggung = input("masukan nomor punggung: ")
    posisi = input("masukan posisi pemain: ")
    umur = input("masukan umur pemain: ")
    gaji = input("masukan gaji pemain: ")
    #arrOfClass[i].players[j]=Player(namaPemain,umur,gaji,nomorPunggung,posisi)
    arrOfClass[i].players[j].name=namaPemain
    arrOfClass[i].players[j].playerNumber=nomorPunggung
    arrOfClass[i].players[j].role=posisi
    arrOfClass[i].players[j].age=umur
    arrOfClass[i].players[j].salary=gaji

i=0
for i in range(m):
  arrOfClass[i].print()


  