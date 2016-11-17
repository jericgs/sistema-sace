%Salvando as informações do módulo fuzzy no banco
%Autor: Erick Gomes
%Data: 07/11/2016
function salvaResult(nomeArea, numImoveis, numAgentes, resposta, qtDias, data, hora)
    db='test';
    user='root';
    pass='';
    url='localhost:3306';
    conn = connectDB(db,user,pass,url);
    if(isempty(conn.message))
        disp('database connected 1')
    else
        disp('cannot connected 1')
     disp(conn.message);
     return
    end
    
    tableName = 'dadosformulario';
    colnames = {'idArea', 'nomeArea', 'numImoveis', 'numAgentes', 'fator_risco', 'qtDias', 'data', 'hora'};
    dados = {'null', nomeArea, numImoveis, numAgentes, resposta, qtDias, data, hora};
    fastinsert(conn,tableName,colnames,dados);
    close(conn)
    if(isempty(conn.message))
       disp('database connected 2')
    else
       disp('cannot connected 2')
    disp(conn.message);
       return
    end
   
end