/****************************************************************************** 
 * Módulo:      PLUGIN Centralizar DIV´s #Realize V2
 * Versão:      V 0.0.1
 * Dt Início:   08/06/2016
 * Dt Update:   08/06/2016
 * Desenvolvido por:  Alessandro Batista Araújo - 8.329.570-4
 * 
 ******************************************************************************/

jQuery.fn.AleCenterDiv = function (topA, leftA) {
    this.css("position","absolute");
    this.css({
        top: topA,
        left: leftA,
        margin: '-' + (this.height() / 2) + 'px 0 0 -' + (this.width() / 2) + 'px'
    });
    return this;
};