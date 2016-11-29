char tokenBuffer[1000];
int nextToken(char *content, char **point, char delimiter) {
	static int lastIndex;
	int tokenSize  = 0;
	tokenBuffer[tokenSize++] = *(content + lastIndex); 
	while(*(content + (++lastIndex)) != '\0') {
		if(*(content + (lastIndex)) == delimiter) {
			tokenBuffer[tokenSize] = '\0';
			*point = tokenBuffer;
			++lastIndex; // aponta para o proximo caracter depois do espaco em branco
			return 1;
		}
		
		tokenBuffer[tokenSize++] = *(content + lastIndex); 
	}
	return 0;
}

# include <stdio.h>
# include <stdlib.h>
# include <conio.h>

using namespace std;

int main(int argc, char *argv[]){
        
    //int soma;
    
    //soma = atoi(argv[1]) + atoi(argv[2]);
    
    FILE *arq;
    int result;

    arq = fopen("C:\\Users\\UERN\\Desktop\\ArqGrav.txt", "wt");

    if (arq == NULL)
    {
       printf("Problemas na CRIACAO do arquivo\n");
       return 0;
     }else{
           
        int cont=1;
        int cont1=0;
        int j= ; 
        
        //int vetor[argv[1].size()] = argv[1];
        
        char *token;
		while(nextToken(argv[1], &token, '#')) {
			//printf("%s\n", token); 
			fprintf(arq, "%s\n", token);
			
		}
    
    
        /*for(cont=1; cont < argc; cont++){
        	
        //printf("%d Parametro: %s\n", cont,argv[cont]);  
           fprintf(arq, "%s\n", argv[cont]);
        }*/
        
		fclose(arq);        		
    }    
    
    system("pause");
    return 0;
}
    
