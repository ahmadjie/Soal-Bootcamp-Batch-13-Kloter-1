#include<iostream>

using namespace std;

int main(){

string nama,nim;
int absen,tugas,uts,uas;
float total;
char grade;


 cout<<"Masukan Nama : ";
 cin>>nama;
 cout<<"Masukan NIM : ";
 cin>>nim;

 awal:
 cout<<"Masukan Jumlah Hadir : ";
 cin>>absen;
    
    if(absen > 14){
        
        cout<<"Batas Maksimal Absen 14"<<endl;
        goto awal;
    }

 cout<<"Masukan Nilai Tugas : ";
 cin>>tugas;
 cout<<"Masukan Nilai UTS : ";
 cin>>uts;
 cout<<"Masukan Nilai UAS : ";
 cin>>uas;

//cek apakah ada nilai yang 0
 if(absen > 0 && tugas > 0 && uts > 0 && uas > 0){

     total =  ((absen*10)/14) + (tugas*0.2) + (uts*0.3) + (uas*0.4);

    if(total >= 80){
        grade = 'A';
    }else if(total >= 71 && total <= 79){
        grade = 'B';
    }else if(total >= 61 && total <= 70){
        grade = 'C';
    }else if(total >= 50 && total <= 60){
        grade = 'D';
    }else{
        grade = 'E';
    }

    cout<<"Nama\t\t: "<<nama<<endl;
    cout<<"NIM\t\t: "<<nim<<endl;
    cout<<"Nilai\t\t: "<<grade<<endl;


}else{

    //jika ada nilai yang 0
     cout<<"Nama \t\t: "<<nama<<endl;
     cout<<"NIM \t\t: "<<nim<<endl;
     cout<<"NIlai\t\t: E"<<endl;

 }


}
