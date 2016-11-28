# include <stdio.h>
# include <stdlib.h>
# include <conio.h>

using namespace std;

int main(int argc, char *argv[]){
        
    //int soma;
    
    //soma = atoi(argv[1]) + atoi(argv[2]);
    
    FILE *arq;
    int result;

    arq = fopen("C:\\Users\\Erick Gomes\\Desktop\\ArqGrav.txt", "wt");

    if (arq == NULL)
    {
       printf("Problemas na CRIACAO do arquivo\n");
       return 0;
     }else{
           
        int cont=0;
    
        for(cont=0; cont < argc; cont++){
        //printf("%d Parametro: %s\n", cont,argv[cont]);  
           fprintf(arq, "%s\n", argv[cont]);
        }
        
		fclose(arq);        		
    }    
    
    system("pause");
    return 0;
}
    
