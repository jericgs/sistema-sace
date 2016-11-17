%Aplicando os dados ao módulo Fuzzy
%Autor: Erick Gomes
%Data: 07/11/2016
function processa(nomeArea, numImoveis, numAgentes, QF, QDeP, NSB, qtDias, data, hora)
   fuzzy_struct = readfis('C:\xampp\htdocs\sace\sistema\fuzzy\modelagem_fuzzy.fis');
   
   numImoveisC = str2double(numImoveis);
   numAgentesC = str2double(numAgentes);
   qtDiasC = str2double(qtDias);
   QFnum = str2double(QF);
   QDePnum = str2double(QDeP);
   NSBnum = str2double(NSB);
   
   entrada = [QFnum QDePnum NSBnum];
   resposta = evalfis(entrada, fuzzy_struct);
   disp(resposta);
   salvaResult(nomeArea, numImoveisC, numAgentesC, resposta, qtDiasC, data, hora);
   
end