#include <bits/stdc++.h>
using namespace std;


class Employee{
  public:
  string name;
  int age;
  int salary;
};

class Player:public Employee{
  public:
  int playerNumber;
  string role;

  Player(){};

};

class Staff:public Employee{
  public:
  string position;
};

class FootballTeam{
  public:
  string teamName;
  string countryName;
  int established;
  Player players[100];
  int totalPlayer;
  
  void setTeamName(string Name){
    teamName=Name;
  }
  string getTeamName(){
    return teamName;
  }

  void setCountry(string Country){
    countryName=Country;
  }

  string getCountry(){
    return countryName;
  }

  void setEstablished(int established){
    established=established;
  }

  int getEstablished(){
    return established;
  }

  FootballTeam(string teamName,string countryName,int established,int totalPlayer){
    this->teamName=teamName;
    this->countryName=countryName;
    this->established=established;
    this->totalPlayer=totalPlayer;  
  };

  FootballTeam(){

  };

   void printClass(){
     printf("=====================================================\n");
     cout<<"Nama tim " + teamName;
     printf("\n");
     cout<<"Nama Negara asal tim " + countryName;
     printf("\n");
     cout<<"Tahun didirikan "<<established;
     printf("\n");
     cout<<"Jumlah pemain "<<totalPlayer;
     printf("\n");
     for(int i=0;i<totalPlayer;i++){
        printf("----------------------------------------------------\n");     
        cout<<"Nama pemain " + players[i].name;
        printf("\n");
        cout<<"Posisi pemain " + players[i].role;
        printf("\n");
        cout<<"Umur pemain " << players[i].age;
        printf("\n");
        cout<<"Gaji pemain " << players[i].salary;
        printf("\n");
        cout<<"Nomor punggung pemain " << players[i].playerNumber;
        printf("\n");
        printf("----------------------------------------------------\n");     
     }
     printf("=====================================================\n");
          
   }  
};

int main() {
  //cout<<"tes\n";

  string teamName;
  string countryName;
  int established;

  int n;
  cout<<"masukan jumlah tim:";
  cin>>n;

  //FootballTeam* arr = (FootballTeam*)malloc(sizeof(FootballTeam) * n);
  //FootballTeam * arr = new FootballTeam[100];

  FootballTeam arr[n];
  
  for(int i=0;i<n;i++){
    cout << "masukan nama tim:";
    cin >> teamName;

    cout << "masukan nama negaranya:";
    cin >> countryName;

    cout << "masukan tahun didirikan tim:";
    cin >> established;

    int m;
    cout<< "masukan jumlah pemain yang ingin dimasukan:";
    cin >>m;
    arr[i]=FootballTeam(teamName, countryName, established,m);

    
    //arr[i].printClass();
    
    string name;
    int playerNumber;
    string role;
    int age;
    int salary;
    for(int j=0;j<m;j++){
      cout << "masukan nama pemain:";
      cin >> name;

      cout << "masukan nomor punggung pemain:";
      cin >> playerNumber;

      cout << "masukan posisi pemain:";
      cin >> role;

      cout << "masukan umur pemain:";
      cin >> age;

      cout << "masukan gaji pemain:";
      cin >> salary;
     
      arr[i].players[j].name = name;
      arr[i].players[j].playerNumber = playerNumber;
      arr[i].players[j].role = role;
      arr[i].players[j].age = age;
      arr[i].players[j].salary = salary;
     // printf("tes2\n");
    }
    //printf("tes3\n");
    //arr[i].printClass();
  }

  for(int i=0;i<n;i++){
    arr[i].printClass();
  }
}