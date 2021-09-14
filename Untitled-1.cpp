/*
#include <iostream>
#include <vector>
#include <string>

using namespace std;

int main()
{
    vector<string> msg {"blablablaaaaaaaaaaa"};

    for (const string& word : msg)
    {
        cout << word << " ";
    }
    cout << endl;
}
*/

#include <iostream>
#include <cmath>
using namespace std;

void hello(int amount);
void triangle(int width);
int printNumber();
int returnRoundNr(double number);
int returnRandom(int low, int high);

int main()
{
    std::cout << "test" << std::flush; // std::flush is in <iostream>
    std::cout << returnRandom(1,5);
    std::cout.flush();
    return 0;
}
void hello(int amount)
{
    for(int i = 0; i<amount; i++){
        std::cout << "Hello World!\n";
    }
   
}
void triangle(int width)
{
    for(int i = 1; i <= width; ++i){
            for(int x = 1; x <= i; ++x){
                cout << "x";
            }
        cout << "\n";
    }
}
int printNumber()
{
    int number;
    cout << "Geef een geheel getal";
    cin >> number;
    return number;
}
int returnRoundNr(double number){
    return round(number);
}
int returnRandom(int low, int high){
    return rand() % low + high;
}