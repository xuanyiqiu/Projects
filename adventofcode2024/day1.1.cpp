#include <iostream>
#include <string.h>
#include <fstream>
using namespace std;

int extractNum(string line ) {
    
    int sum = 0;
    
    for (int i = 0; i < line.size(); i++) {
        if (line[i] >= 0 and line[i] <= 9) {
            sum = sum * 10 + line[i] - '0';
        }
    }

    return sum;
}

int main(int argc, char* argv[]) {
    ifstream inputFile(argv[1]);

    string line;
    int total = 0;
    while (getline(inputFile, line)) {
        total += extractNum(line);
    }
    cout << total << endl;
}