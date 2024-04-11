#include <stdio.h>
#include <stdlib.h>

int main()
{
    srand((unsigned) time(NULL));
    
    int sample = 100000;
    int count = 0;
    int damage = 5;
    for(int i = 0;i < sample; i++){
        int followers[3]={2, 6, 1}, index;
        for(int j = 0; j < damage; j++){
            do{
                index = rand()%3;
            }while(followers[index] == 0);
            followers[index]--;
        }
        if(followers[0] == 0){
            count++;
        }
    }
    

    printf("%d/%d = %.3f", count, sample, 1.0*count/sample);

    return 0;
}
