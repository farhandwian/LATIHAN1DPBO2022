// Java code to illustrate String
import java.io.*;
import java.lang.*;
import java.util.*;


class Employee{
  String name;
  int age;
  int salary; 
}

class Player extends Employee{
  int playerNumber;
  String pos;
}


class FootballTeam {
  String teamName;
  String countryName;
  int established;
  Player[]players=new Player[100];
  int totalPlayer;


  FootballTeam(){

  }

  FootballTeam(String teamName,String countryName,int established,int totalPlayer){
    this.teamName=teamName;
    this.countryName=countryName;
    this.established=established;
    this.totalPlayer=totalPlayer;  
  };

  public void print(){
    System.out.println("=========================================");
    System.out.println("Nama tim " + teamName);
    System.out.println("Nama Negara asal tim"  + countryName);
    System.out.println("Tahun didirikan "+established);
    System.out.println("Jumlah pemain "+totalPlayer);
    
    for(int i=0;i<totalPlayer;i++){
      System.out.println("-----------------------------------------");
      System.out.println("Nama pemain " + players[i].name);
      System.out.println("Posisi pemain " + players[i].pos);
      System.out.println("Umur pemain " + players[i].age);
      System.out.println("Gaji pemain " + players[i].salary);
      System.out.println("Nomor punggung pemain " + players[i].playerNumber);
      System.out.println("------------------------------------------");
    }
    System.out.println("=========================================");
    
  }
}


class Main {
  public static void main(String[] args) {
    Scanner sc= new Scanner(System.in); //System.in is a standard input stream
    System.out.println("Masukan jumlah tim:");
    int n=sc.nextInt();

    FootballTeam[]arr=new FootballTeam[n];

    int i=0;
    for(i=0;i<n;i++){
      Scanner SC= new Scanner(System.in); //System.in is a standard input stream
      System.out.println("Masukan nama tim:");
      String teamName=SC.nextLine();
      System.out.println("Masukan nama negara dari tim:");
      String countryName=SC.nextLine();
      System.out.println("Masukan tahun didirikan:");
      int established=SC.nextInt(); 
      System.out.println("Masukan total pemain:");
      int totalPlayer=SC.nextInt();

      arr[i] = new FootballTeam(teamName,countryName,established,totalPlayer);
     // System.out.println("Nama tim " + arr[i].teamName);
      //System.out.println("\n");
    
      for(int j=0;j<totalPlayer;j++){
        Scanner SCA= new Scanner(System.in); 
        System.out.println("Masukan nama pemain:");
        String name=SCA.nextLine();
        System.out.println("Masukan posisi pemain:");
        String pos=SCA.nextLine();
        System.out.println("Masukan nomor punggung pemain:");
        int playerNumber=SCA.nextInt();
        System.out.println("Masukan umur pemain:");
        int age=SCA.nextInt();
        System.out.println("Masukan gaji pemain:");
        int salary=SCA.nextInt();

        arr[i].players[j] = new Player();
        arr[i].players[j].salary = salary;
        arr[i].players[j].age = age;
        arr[i].players[j].playerNumber = playerNumber;
        //System.out.println("gajinya"+arr[i].players[j].salary);
        arr[i].players[j].name = name;
        arr[i].players[j].pos = pos;        
      }
    }  

    for(int k=0;k<n;k++){
      arr[k].print();
    }
  }
}