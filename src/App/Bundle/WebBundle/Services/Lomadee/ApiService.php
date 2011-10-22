<?php
/**
 * @namespace
 */
namespace App\Bundle\WebBundle\Services\Lomadee;

use Symfony\Component\DependencyInjection\Container;
use \UnexpectedValueException;

$categories = <<<XML
<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<Result xmlns="urn:buscape" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" totalResultsReturned="74" totalResultsAvailable="74" xsi:schemaLocation="http://developer.buscape.com/admin/buscape.xsd">
    <details>
        <applicationID>5a2f6f786f61782b62314d3d</applicationID>
        <date>2011-10-22T15:03:34.139-02:00</date>
        <elapsedTime>45</elapsedTime>
        <status>success</status>
        <code>0</code>
        <message>success</message>
    </details>
    <subCategory hasOffer="false" isFinal="true" parentCategoryId="6420" id="77">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/77.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/celular-e-smartphone.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findProductList/5a2f6f786f61782b62314d3d/br/?categoryId=77&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Celular e Smartphone</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="6420" id="4667">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/4667.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/capa-para-celular-e-smartphone.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=4667&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Capa para Celular e Smartphone</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="6420" id="4699">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/4699.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/carregador-para-celular-e-smartphone.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=4699&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Carregador para Celular e Smartphone</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="6420" id="4666">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/4666.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/bateria-para-celular-e-smartphone.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=4666&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Bateria para Celular e Smartphone</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="6420" id="7003">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/7003.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/jogos-para-celular-e-smartphone.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=7003&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Jogos para Celular e Smartphone</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="8580">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/8580.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/aluguel-de-celular-e-smartphone.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=8580&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Aluguel de Celular e Smartphone</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="6420" id="80">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/80.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/outros-acessorios-para-celular-e-smartphone.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=80&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Outros Acessórios para Celular e Smartphone</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="6420" id="9469">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/9469.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/cabo-de-dados-para-celular-e-smartphone.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=9469&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Cabo de Dados para Celular e Smartphone</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="6420" id="4671">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/4671.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/fone-de-ouvido-para-celular-e-smartphone.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=4671&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Fone de Ouvido para Celular e Smartphone</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="7729">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/7729.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/assistencia-tecnica-para-celular-e-smartphone.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=7729&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Assistência Técnica para Celular e Smartphone</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="6420" id="4669">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/4669.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/kit-viva-voz-para-celular-e-smartphone.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=4669&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Kit Viva Voz para Celular e Smartphone</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="6420" id="6430">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/6430.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/chip-pre-pago.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=6430&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Chip Pré-Pago</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="6420" id="8120">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/8120.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/picture-message.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=8120&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Picture Message</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="6420" id="8907">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/8907.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/chip-pos-pago.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=8907&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Chip Pós-Pago</name>
    </subCategory>
    <subCategory hasOffer="false" isFinal="true" parentCategoryId="1328" id="2947">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/2947.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/mochila.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findProductList/5a2f6f786f61782b62314d3d/br/?categoryId=2947&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Mochila</name>
    </subCategory>
    <subCategory hasOffer="false" isFinal="true" parentCategoryId="1" id="16">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/16.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/fone-de-ouvido-headset.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findProductList/5a2f6f786f61782b62314d3d/br/?categoryId=16&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Fone de Ouvido / Headset</name>
    </subCategory>
    <subCategory hasOffer="false" isFinal="true" parentCategoryId="2" id="3764">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/3764.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/mochila-maleta-para-notebook.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findProductList/5a2f6f786f61782b62314d3d/br/?categoryId=3764&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Mochila / Maleta para Notebook</name>
    </subCategory>
    <subCategory hasOffer="false" isFinal="true" parentCategoryId="3482" id="3482">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/3482.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/livros.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findProductList/5a2f6f786f61782b62314d3d/br/?categoryId=3482&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Livros</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="2468" id="3483">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/3483.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/bolsa.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=3483&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Bolsa</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="9684">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/9684.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/negocios-e-oportunidades.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=9684&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Negócios e Oportunidades</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="8019">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/8019.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/consultoria-de-telecomunicacao.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=8019&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Consultoria de Telecomunicação</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="8422">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/8422.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/conserto-de-aparelhos-telefonicos.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=8422&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Conserto de Aparelhos Telefônicos</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="9549" id="9532">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/9532.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/imoveis-residenciais.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=9532&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Imóveis Residenciais</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="2701" id="6405">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/6405.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/outros-acessorios-para-seguranca.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=6405&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Outros Acessórios para Segurança</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="3473" id="10324">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/10324.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/outros-brinquedos-para-bebe.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=10324&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Outros Brinquedos para Bebê</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="2922" id="2922">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/2922.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/dvds.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=2922&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>DVDs</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="7356">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/7356.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/assistencia-tecnica-equipamentos-informatica.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=7356&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Assistência Técnica Equipamentos Informática</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="6420" id="10586">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/10586.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/outros-acessorios-para-aparelhos-telefonicos.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=10586&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Outros Acessórios para Aparelhos Telefônicos</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="7750">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/7750.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/telemensagem-videomensagem.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=7750&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Telemensagem / Videomensagem</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="6420" id="7912">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/7912.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/central-telefonica.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=7912&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Central Telefônica</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="6016" id="7733">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/7733.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/artigos-judaicos.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=7733&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Artigos Judaicos</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="2468" id="2497">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/2497.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/outros-acessorios-de-moda.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=2497&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Outros Acessórios de Moda</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="2701" id="3640">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/3640.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/cortina-persiana.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=3640&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Cortina / Persiana</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="179" id="214">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/214.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/brinquedos-eletronicos.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=214&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Brinquedos Eletrônicos</name>
    </subCategory>
    <subCategory hasOffer="false" isFinal="true" parentCategoryId="9627" id="93">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/93.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/camera-digital.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findProductList/5a2f6f786f61782b62314d3d/br/?categoryId=93&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Câmera Digital</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="9681">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/9681.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/curriculos.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=9681&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Currículos</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="8289">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/8289.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/engenharia-de-telecomunicacoes.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=8289&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Engenharia de Telecomunicações</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="7426" id="8164">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/8164.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/cursos-e-treinamentos-em-audio-video.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=8164&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Cursos e Treinamentos em Áudio / Vídeo</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="7954">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/7954.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/outros-servicos-em-telefonia.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=7954&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Outros Serviços em Telefonia</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="7497">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/7497.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/organizacao-de-festas-eventos.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=7497&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Organização de Festas / Eventos</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="2921" id="2921">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/2921.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/cds.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=2921&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>CDs</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="9574">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/9574.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/planos-para-telefonia-fixa.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=9574&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Planos para Telefonia Fixa</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="9129">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/9129.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/servicos-de-promocao-de-vendas.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=9129&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Serviços de Promoção de Vendas</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="9044">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/9044.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/vagas-de-emprego.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=9044&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Vagas de Emprego</name>
    </subCategory>
    <subCategory hasOffer="false" isFinal="true" parentCategoryId="1" id="6399">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/6399.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/auto-dvd-player.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findProductList/5a2f6f786f61782b62314d3d/br/?categoryId=6399&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Auto-DVD Player</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="3484" id="3537">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/3537.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/organizador.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=3537&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Organizador</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="9079">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/9079.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/igrejas-templos-instituicoes-religiosas.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=9079&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Igrejas / Templos / Instituições Religiosas</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="2701" id="7919">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/7919.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/porteiro-eletronico.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=7919&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Porteiro Eletrônico</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="7582">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/7582.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/design-de-sites.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=7582&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Design de Sites</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="249" id="7535">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/7535.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/creme-anti-rugas.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=7535&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Creme Anti-Rugas</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="5845" id="7296">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/7296.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/curso-de-informatica-tecnologia.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=7296&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Curso de Informática / Tecnologia</name>
    </subCategory>
    <subCategory hasOffer="false" isFinal="true" parentCategoryId="3841" id="9825">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/9825.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/carros.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findProductList/5a2f6f786f61782b62314d3d/br/?categoryId=9825&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Carros</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="3841" id="3630">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/3630.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/outros-acessorios-pecas-para-automoveis.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=3630&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Outros Acessórios / Peças para Automóveis</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="6108" id="7157">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/7157.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/apostila-para-concursos-cursos.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=7157&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Apostila para Concursos / Cursos</name>
    </subCategory>
    <subCategory hasOffer="false" isFinal="true" parentCategoryId="249" id="3442">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/3442.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/perfume.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findProductList/5a2f6f786f61782b62314d3d/br/?categoryId=3442&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Perfume</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="2" id="30">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/30.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/softwares-aplicativos-utilitarios.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=30&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Softwares Aplicativos / Utilitários</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="249" id="2242">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/2242.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/outros-produtos-para-cabelo.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=2242&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Outros Produtos para Cabelo</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="1" id="10318">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/10318.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/capa-para-mp3-player-mp4-player.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=10318&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Capa para MP3 Player / MP4 Player</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="3841" id="10422">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/10422.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/outros-produtos-de-seguranca-para-automoveis.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=10422&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Outros Produtos de Segurança para Automóveis</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="3841" id="10419">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/10419.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/alarme-para-automoveis.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=10419&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Alarme para Automóveis</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="3484" id="2396">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/2396.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/lembrancinhas.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=2396&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Lembrancinhas</name>
    </subCategory>
    <subCategory hasOffer="false" isFinal="true" parentCategoryId="2" id="6424">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/6424.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/notebook.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findProductList/5a2f6f786f61782b62314d3d/br/?categoryId=6424&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Notebook</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="1328" id="6113">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/6113.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/outros-artigos-para-tenis.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=6113&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Outros Artigos para Tênis</name>
    </subCategory>
    <subCategory hasOffer="false" isFinal="true" parentCategoryId="1" id="2982">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/2982.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/gps.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findProductList/5a2f6f786f61782b62314d3d/br/?categoryId=2982&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>GPS</name>
    </subCategory>
    <subCategory hasOffer="false" isFinal="true" parentCategoryId="1" id="5839">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/5839.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/auto-radio-cd-player.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findProductList/5a2f6f786f61782b62314d3d/br/?categoryId=5839&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Auto-Rádio CD Player</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="249" id="328">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/328.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/shampoo-para-cabelo.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=328&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Shampoo para Cabelo</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="6420" id="9583">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/9583.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/aparelho-telefonico-voip.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=9583&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Aparelho Telefônico VoIP</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="1328" id="9502">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/9502.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/bolsa-para-bicicleta.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=9502&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Bolsa para Bicicleta</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="249" id="360">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/360.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/mascara-para-cabelo.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=360&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Máscara para Cabelo</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="249" id="329">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/329.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/condicionador-para-cabelo.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=329&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Condicionador para Cabelo</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="2701" id="6149">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/6149.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/outros-produtos-esotericos.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=6149&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Outros Produtos Esotéricos</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="179" id="10415">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/10415.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/outros-brinquedos-educativos.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=10415&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Outros Brinquedos Educativos</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="7426" id="5970">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/5970.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/placas-de-sinalizacao.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=5970&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Placas de Sinalização</name>
    </subCategory>
    <subCategory hasOffer="true" isFinal="true" parentCategoryId="2" id="10325">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/10325.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/acessorios-para-tablet.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?categoryId=10325&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Acessórios para Tablet</name>
    </subCategory>
</Result>
XML;


/**
 * API Service for Lomadee.
 */
class ApiService
{   
    /**
     * @var Symfony\Component\DependencyInjection\Container
     */
    private $container;
    /**
     * Lomadee APP ID
     * @var string
     */
    private $app_id;
    /**
     * User source ID
     * @var string
     */
    private $source_id;
    
    /**
     * @var App\Bundle\WebBundle\Services\Lomadee\Wrapper
     */
    private $client;
    
    /**
     * Constructor.
     * 
     * @param Symfony\Component\DependencyInjection\Container   $container
     * @param string                                            $appId
     * @param boolean[optional]                                  $sandbox
     */
    public function __construct(Container $container, $appId, $sandbox = false)
    {
        $sandbox         = (boolean) $sandbox;
        $this->container = $container;
        $this->app_id    = $appId;
        
        if ($sandbox) {
            $this->getClient()->setSandbox();
        }
    }
    
    /**
     * Returns the Lomadee APP ID.
     *
     * @throws  UnexpectedValueException
     * @return  string
     */
    public function getAppId()
    {
        if (empty($this->app_id)) {
            $msg = 'No APP_ID defined for Lomadee service. Dumbass.';
            throw new UnexpectedValueException($msg);
        }
        return $this->app_id;
    }
    
    /**
     * Defines the source id to consume the service.
     *
     * @param string $id 
     */
    public function setSourceId($id)
    {
        $this->source_id = $id;
    }
    
    /**
     * Returns the source id for lomadee service.
     *
     * @return string
     */
    public function getSourceId()
    {
        if (empty($this->source_id)) {
            $msg = 'Source ID for Lomadee not set! Dumbass!';
            throw new UnexpectedValueException($msg);
        }
        return $this->source_id;
    }
    
    /**
     * Returns if there is source id to be used.
     *
     * @return boolean
     */
    public function hasSourceId()
    {
        return (!empty($this->source_id));
    }
    
    /**
     * Returns the Client Wrapper API.
     *
     * @return App\Bundle\WebBundle\Services\Lomadee\Wrapper
     */
    public function getClient()
    {
        if ( ! $this->client instanceof Wrapper) {
            $this->client = new Wrapper($this->getAppId());
        }
        
        return $this->client;
    }
    
    public function getCategoryList(array $args = array())
    {
        global $categories;

        if ($this->hasSourceId()) {
            //$this->client->setSourceId($this->getSourceId());
        }
        
        //$result = $this->client->findCategoryList($args);
        $result = $categories;
        $return = array();
        
        if (!$result) {
            return null;
        }
        
        $xml    = new \SimpleXMLElement($result);
        $nodes  = array('subCategory');
        
        foreach ($xml as $name=>$element) {
            if (!in_array($name, $nodes)) { continue; }
            
            $cat            = new Category();
            $cat->id        = $element['id'];
            $cat->name      = (string) $element->name;
            $cat->parentId  = (string) $element['parentCategoryId'];
            $cat->thumbnail = (string) $element->thumbnail['url'];
            $cat->hasOffers = (boolean) $element['hasOffers'];
            $cat->parentId  = (string) $element['parentCategoryId'];
            $cat->isFinal   = (string) $element['isFinal'];
            
            $return[] = $cat;
        }
        return $return;
    }
    
    public function searchProducts($keyword)
    {
		$products = <<< XML
<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<Result xmlns="urn:buscape" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" match="all" page="1" totalPages="88" totalResultsReturned="16" totalResultsAvailable="1405" xsi:schemaLocation="http://developer.buscape.com/admin/buscape.xsd">
    <details>
        <applicationID>5a2f6f786f61782b62314d3d</applicationID>
        <date>2011-10-22T15:45:11.431-02:00</date>
        <elapsedTime>21</elapsedTime>
        <status>success</status>
        <code>0</code>
        <message>success</message>
    </details>
    <category hasOffer="false" isFinal="true" parentCategoryId="6420" id="77">
        <thumbnail url="http://imagem.buscape.com.br/bp5/categorias/77.jpg"/>
        <links>
            <link type="category" url="http://compare.buscape.com.br/celular-e-smartphone.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findProductList/5a2f6f786f61782b62314d3d/br/?categoryId=77&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <name>Celular e Smartphone</name>
    </category>
    <product id="310168" eco="false" hasMetaSearch="false" categoryId="77" totalSellers="25" fullDescription="false">
        <productName>Samsung C3222 GSM Desbloqueado</productName>
        <productShortName>Samsung C3222 Desbloqueado</productShortName>
        <currency abbreviation="BRL"/>
        <priceMin>179.10</priceMin>
        <priceMax>379.00</priceMax>
        <links>
            <link type="product" url="http://compare.buscape.com.br/samsung-c3222-gsm-desbloqueado.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="specification" url="http://compare.buscape.com.br/prod_ficha?idu=310168"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?productId=310168&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <thumbnail url="http://imagem.buscape.com.br/thumbs/ensopado/77/200x200_310168_1.jpg"/>
        <rating>
            <userAverageRating>
                <numComments>34</numComments>
                <rating>8.2</rating>
                <links>
                    <link type="xml" url="http://sandbox.buscape.com/service/viewUserRatings/5a2f6f786f61782b62314d3d/br/?productId=310168&amp;keyword=celular&amp;sourceId=9262544"/>
                </links>
            </userAverageRating>
        </rating>
        <specification>
            <links>
                <link type="xml" url="http://sandbox.buscape.com/service/viewProductDetails/5a2f6f786f61782b62314d3d/br/?productId=310168&amp;keyword=celular&amp;sourceId=9262544"/>
            </links>
            <item label="Câmera">
                <value>1.3 MP</value>
            </item>
            <item label="Funções Extras">
                <value>Gravador de Vídeo</value>
                <value>Gravador de Voz</value>
                <value>Java</value>
                <value>MP3 Player</value>
                <value>Reproduz Música</value>
                <value>Reproduz Vídeo</value>
                <value>Viva Voz</value>
            </item>
            <item label="3G">
                <value>Não</value>
            </item>
            <item label="Slots de Expansão">
                <value>MicroSD</value>
            </item>
            <item label="Tipos de Conexão">
                <value>Bluetooth</value>
                <value>EDGE</value>
                <value>Fone de Ouvido</value>
                <value>GPRS</value>
                <value>Micro-USB</value>
                <value>USB</value>
                <value>WAP</value>
            </item>
        </specification>
    </product>
    <product id="272521" eco="true" hasMetaSearch="false" categoryId="77" totalSellers="23" fullDescription="false">
        <productName>Nokia C3 GSM Desbloqueado</productName>
        <productShortName>Nokia C3 Desbloqueado</productShortName>
        <currency abbreviation="BRL"/>
        <priceMin>250.90</priceMin>
        <priceMax>558.00</priceMax>
        <links>
            <link type="product" url="http://compare.buscape.com.br/nokia-c3-gsm-desbloqueado.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="specification" url="http://compare.buscape.com.br/prod_ficha?idu=272521"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?productId=272521&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <thumbnail url="http://imagem.buscape.com.br/thumbs/ensopado/77/200x200_272521_1.jpg"/>
        <rating>
            <userAverageRating>
                <numComments>194</numComments>
                <rating>9.0</rating>
                <links>
                    <link type="xml" url="http://sandbox.buscape.com/service/viewUserRatings/5a2f6f786f61782b62314d3d/br/?productId=272521&amp;keyword=celular&amp;sourceId=9262544"/>
                </links>
            </userAverageRating>
        </rating>
        <specification>
            <links>
                <link type="xml" url="http://sandbox.buscape.com/service/viewProductDetails/5a2f6f786f61782b62314d3d/br/?productId=272521&amp;keyword=celular&amp;sourceId=9262544"/>
            </links>
            <item label="Câmera">
                <value>2.0 MP</value>
            </item>
            <item label="Funções Extras">
                <value>Gravador de Vídeo</value>
                <value>Gravador de Voz</value>
                <value>Java</value>
                <value>MP3 Player</value>
                <value>Rádio</value>
                <value>Reproduz Música</value>
                <value>Reproduz Vídeo</value>
                <value>Viva Voz</value>
            </item>
            <item label="3G">
                <value>Não</value>
            </item>
            <item label="Slots de Expansão">
                <value>MicroSD</value>
            </item>
            <item label="Tipos de Conexão">
                <value>Bluetooth</value>
                <value>EDGE</value>
                <value>Fone de Ouvido</value>
                <value>GPRS</value>
                <value>USB</value>
                <value>WAP</value>
                <value>Wi-Fi</value>
            </item>
        </specification>
    </product>
    <product id="278561" eco="false" hasMetaSearch="false" categoryId="77" totalSellers="21" fullDescription="false">
        <productName>Motorola EX115 GSM Desbloqueado</productName>
        <productShortName>Motorola EX115 Desbloqueado</productShortName>
        <currency abbreviation="BRL"/>
        <priceMin>237.91</priceMin>
        <priceMax>399.00</priceMax>
        <links>
            <link type="product" url="http://compare.buscape.com.br/motorola-ex115-gsm-desbloqueado.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="specification" url="http://compare.buscape.com.br/prod_ficha?idu=278561"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?productId=278561&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <thumbnail url="http://imagem.buscape.com.br/thumbs/ensopado/77/200x200_278561_1.jpg"/>
        <rating>
            <userAverageRating>
                <numComments>278</numComments>
                <rating>7.2</rating>
                <links>
                    <link type="xml" url="http://sandbox.buscape.com/service/viewUserRatings/5a2f6f786f61782b62314d3d/br/?productId=278561&amp;keyword=celular&amp;sourceId=9262544"/>
                </links>
            </userAverageRating>
        </rating>
        <specification>
            <links>
                <link type="xml" url="http://sandbox.buscape.com/service/viewProductDetails/5a2f6f786f61782b62314d3d/br/?productId=278561&amp;keyword=celular&amp;sourceId=9262544"/>
            </links>
            <item label="Câmera">
                <value>3.15 MP</value>
            </item>
            <item label="Funções Extras">
                <value>Gravador de Vídeo</value>
                <value>MP3 Player</value>
                <value>Rádio</value>
                <value>Reproduz Música</value>
                <value>Reproduz Vídeo</value>
                <value>Viva Voz</value>
            </item>
            <item label="3G">
                <value>Não</value>
            </item>
            <item label="Slots de Expansão">
                <value>MicroSD</value>
            </item>
            <item label="Tipos de Conexão">
                <value>Bluetooth</value>
                <value>EDGE</value>
                <value>Fone de Ouvido</value>
                <value>USB</value>
                <value>WAP</value>
            </item>
        </specification>
    </product>
    <product id="232685" eco="false" hasMetaSearch="false" categoryId="77" totalSellers="21" fullDescription="false">
        <productName>Samsung Duos Touch B5722 GSM Desbloqueado</productName>
        <productShortName>Samsung Duos Touch B5722 Desbloqueado</productShortName>
        <currency abbreviation="BRL"/>
        <priceMin>359.10</priceMin>
        <priceMax>699.00</priceMax>
        <links>
            <link type="product" url="http://compare.buscape.com.br/samsung-duos-touch-b5722-gsm-desbloqueado.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="specification" url="http://compare.buscape.com.br/prod_ficha?idu=232685"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?productId=232685&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <thumbnail url="http://imagem.buscape.com.br/thumbs/ensopado/77/200x200_232685_1.jpg"/>
        <rating>
            <userAverageRating>
                <numComments>88</numComments>
                <rating>8.2</rating>
                <links>
                    <link type="xml" url="http://sandbox.buscape.com/service/viewUserRatings/5a2f6f786f61782b62314d3d/br/?productId=232685&amp;keyword=celular&amp;sourceId=9262544"/>
                </links>
            </userAverageRating>
        </rating>
        <specification>
            <links>
                <link type="xml" url="http://sandbox.buscape.com/service/viewProductDetails/5a2f6f786f61782b62314d3d/br/?productId=232685&amp;keyword=celular&amp;sourceId=9262544"/>
            </links>
            <item label="Câmera">
                <value>3.2 MP</value>
            </item>
            <item label="Funções Extras">
                <value>Gravador de Vídeo</value>
                <value>Gravador de Voz</value>
                <value>Java</value>
                <value>MP3 Player</value>
                <value>Rádio</value>
                <value>Reproduz Música</value>
                <value>Reproduz Vídeo</value>
                <value>Viva Voz</value>
            </item>
            <item label="3G">
                <value>Não</value>
            </item>
            <item label="Slots de Expansão">
                <value>MicroSD</value>
            </item>
            <item label="Tipos de Conexão">
                <value>Bluetooth</value>
                <value>EDGE</value>
                <value>GPRS</value>
                <value>USB</value>
                <value>WAP</value>
            </item>
        </specification>
    </product>
    <product id="280526" eco="false" hasMetaSearch="false" categoryId="77" totalSellers="20" fullDescription="false">
        <productName>Samsung Duos Lite E2152 GSM Desbloqueado</productName>
        <productShortName>Samsung Duos Lite E2152 Desbloqueado</productShortName>
        <currency abbreviation="BRL"/>
        <priceMin>199.00</priceMin>
        <priceMax>299.00</priceMax>
        <links>
            <link type="product" url="http://compare.buscape.com.br/samsung-duos-lite-e2152-gsm-desbloqueado.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="specification" url="http://compare.buscape.com.br/prod_ficha?idu=280526"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?productId=280526&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <thumbnail url="http://imagem.buscape.com.br/thumbs/ensopado/77/200x200_280526_1.jpg"/>
        <rating>
            <userAverageRating>
                <numComments>74</numComments>
                <rating>5.0</rating>
                <links>
                    <link type="xml" url="http://sandbox.buscape.com/service/viewUserRatings/5a2f6f786f61782b62314d3d/br/?productId=280526&amp;keyword=celular&amp;sourceId=9262544"/>
                </links>
            </userAverageRating>
        </rating>
        <specification>
            <links>
                <link type="xml" url="http://sandbox.buscape.com/service/viewProductDetails/5a2f6f786f61782b62314d3d/br/?productId=280526&amp;keyword=celular&amp;sourceId=9262544"/>
            </links>
            <item label="Câmera">
                <value>0.3 MP</value>
            </item>
            <item label="Funções Extras">
                <value>Gravador de Vídeo</value>
                <value>Java</value>
                <value>MP3 Player</value>
                <value>Rádio</value>
                <value>Reproduz Música</value>
                <value>Reproduz Vídeo</value>
                <value>Viva Voz</value>
            </item>
            <item label="3G">
                <value>Não</value>
            </item>
            <item label="Slots de Expansão">
                <value>MicroSD</value>
            </item>
            <item label="Tipos de Conexão">
                <value>Bluetooth</value>
                <value>EDGE</value>
                <value>Fone de Ouvido</value>
                <value>GPRS</value>
                <value>USB</value>
            </item>
        </specification>
    </product>
    <product id="325826" eco="false" hasMetaSearch="false" categoryId="77" totalSellers="19" fullDescription="false">
        <productName>Nokia X1-01 GSM Desbloqueado</productName>
        <productShortName>Nokia X1-01 Desbloqueado</productShortName>
        <currency abbreviation="BRL"/>
        <priceMin>114.67</priceMin>
        <priceMax>161.10</priceMax>
        <links>
            <link type="product" url="http://compare.buscape.com.br/nokia-x1-01-gsm-desbloqueado.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="specification" url="http://compare.buscape.com.br/prod_ficha?idu=325826"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?productId=325826&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <thumbnail url="http://imagem.buscape.com.br/thumbs/ensopado/77/200x200_325826_1.jpg"/>
        <rating>
            <userAverageRating>
                <numComments>100</numComments>
                <rating>7.6</rating>
                <links>
                    <link type="xml" url="http://sandbox.buscape.com/service/viewUserRatings/5a2f6f786f61782b62314d3d/br/?productId=325826&amp;keyword=celular&amp;sourceId=9262544"/>
                </links>
            </userAverageRating>
        </rating>
        <specification>
            <links>
                <link type="xml" url="http://sandbox.buscape.com/service/viewProductDetails/5a2f6f786f61782b62314d3d/br/?productId=325826&amp;keyword=celular&amp;sourceId=9262544"/>
            </links>
            <item label="Funções Extras">
                <value>Lanterna</value>
                <value>Rádio</value>
                <value>Reproduz Música</value>
                <value>Viva Voz</value>
            </item>
            <item label="Slots de Expansão">
                <value>MicroSD</value>
            </item>
            <item label="Tipos de Conexão">
                <value>Fone de Ouvido</value>
            </item>
        </specification>
    </product>
    <product id="306783" eco="false" hasMetaSearch="false" categoryId="77" totalSellers="19" fullDescription="false">
        <productName>LG Optimus One P500 GSM Desbloqueado</productName>
        <productShortName>LG Optimus One P500 Desbloqueado</productShortName>
        <currency abbreviation="BRL"/>
        <priceMin>441.91</priceMin>
        <priceMax>611.10</priceMax>
        <links>
            <link type="product" url="http://compare.buscape.com.br/lg-optimus-one-p500-gsm-desbloqueado.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="specification" url="http://compare.buscape.com.br/prod_ficha?idu=306783"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?productId=306783&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <thumbnail url="http://imagem.buscape.com.br/thumbs/ensopado/77/200x200_306783_1.jpg"/>
        <rating>
            <userAverageRating>
                <numComments>83</numComments>
                <rating>8.8</rating>
                <links>
                    <link type="xml" url="http://sandbox.buscape.com/service/viewUserRatings/5a2f6f786f61782b62314d3d/br/?productId=306783&amp;keyword=celular&amp;sourceId=9262544"/>
                </links>
            </userAverageRating>
        </rating>
        <specification>
            <links>
                <link type="xml" url="http://sandbox.buscape.com/service/viewProductDetails/5a2f6f786f61782b62314d3d/br/?productId=306783&amp;keyword=celular&amp;sourceId=9262544"/>
            </links>
            <item label="Câmera">
                <value>3.2 MP</value>
            </item>
            <item label="Funções Extras">
                <value>Gravador de Vídeo</value>
                <value>Gravador de Voz</value>
                <value>Java</value>
                <value>MP3 Player</value>
                <value>Rádio</value>
                <value>Reproduz Música</value>
                <value>Reproduz Vídeo</value>
                <value>Visualizador de Documentos</value>
                <value>Viva Voz</value>
            </item>
            <item label="3G">
                <value>Sim</value>
            </item>
            <item label="Slots de Expansão">
                <value>MicroSD</value>
            </item>
            <item label="Tipos de Conexão">
                <value>Bluetooth</value>
                <value>EDGE</value>
                <value>GPRS</value>
                <value>USB</value>
                <value>Wi-Fi</value>
            </item>
        </specification>
    </product>
    <product id="294766" eco="true" hasMetaSearch="false" categoryId="77" totalSellers="19" fullDescription="false">
        <productName>Motorola Spice XT300 GSM Desbloqueado</productName>
        <productShortName>Motorola Spice XT300 Desbloqueado</productShortName>
        <currency abbreviation="BRL"/>
        <priceMin>416.41</priceMin>
        <priceMax>624.00</priceMax>
        <links>
            <link type="product" url="http://compare.buscape.com.br/motorola-spice-xt300-gsm-desbloqueado.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="specification" url="http://compare.buscape.com.br/prod_ficha?idu=294766"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?productId=294766&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <thumbnail url="http://imagem.buscape.com.br/thumbs/ensopado/77/200x200_294766_1.jpg"/>
        <rating>
            <userAverageRating>
                <numComments>49</numComments>
                <rating>6.8</rating>
                <links>
                    <link type="xml" url="http://sandbox.buscape.com/service/viewUserRatings/5a2f6f786f61782b62314d3d/br/?productId=294766&amp;keyword=celular&amp;sourceId=9262544"/>
                </links>
            </userAverageRating>
        </rating>
        <specification>
            <links>
                <link type="xml" url="http://sandbox.buscape.com/service/viewProductDetails/5a2f6f786f61782b62314d3d/br/?productId=294766&amp;keyword=celular&amp;sourceId=9262544"/>
            </links>
            <item label="Câmera">
                <value>3.2 MP</value>
            </item>
            <item label="Funções Extras">
                <value>Gravador de Vídeo</value>
                <value>Java</value>
                <value>Loja Online de Aplicativos</value>
                <value>MP3 Player</value>
                <value>Rádio</value>
                <value>Reproduz Música</value>
                <value>Reproduz Vídeo</value>
                <value>Visualizador de Documentos</value>
                <value>Viva Voz</value>
            </item>
            <item label="3G">
                <value>Sim</value>
            </item>
            <item label="Slots de Expansão">
                <value>MicroSD</value>
            </item>
            <item label="Tipos de Conexão">
                <value>Bluetooth</value>
                <value>Fone de Ouvido</value>
                <value>USB</value>
                <value>WAP</value>
                <value>Wi-Fi</value>
            </item>
        </specification>
    </product>
    <product id="310939" eco="false" hasMetaSearch="false" categoryId="77" totalSellers="19" fullDescription="false">
        <productName>Nokia X2-01 GSM Desbloqueado</productName>
        <productShortName>Nokia X2-01 Desbloqueado</productShortName>
        <currency abbreviation="BRL"/>
        <priceMin>169.00</priceMin>
        <priceMax>398.00</priceMax>
        <links>
            <link type="product" url="http://compare.buscape.com.br/nokia-x2-01-gsm-desbloqueado.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="specification" url="http://compare.buscape.com.br/prod_ficha?idu=310939"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?productId=310939&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <thumbnail url="http://imagem.buscape.com.br/thumbs/ensopado/77/200x200_310939_1.jpg"/>
        <rating>
            <userAverageRating>
                <numComments>27</numComments>
                <rating>8.4</rating>
                <links>
                    <link type="xml" url="http://sandbox.buscape.com/service/viewUserRatings/5a2f6f786f61782b62314d3d/br/?productId=310939&amp;keyword=celular&amp;sourceId=9262544"/>
                </links>
            </userAverageRating>
        </rating>
        <specification>
            <links>
                <link type="xml" url="http://sandbox.buscape.com/service/viewProductDetails/5a2f6f786f61782b62314d3d/br/?productId=310939&amp;keyword=celular&amp;sourceId=9262544"/>
            </links>
            <item label="Câmera">
                <value>0.3 MP</value>
            </item>
            <item label="Funções Extras">
                <value>Gravador de Vídeo</value>
                <value>Gravador de Voz</value>
                <value>Java</value>
                <value>Loja Online de Aplicativos</value>
                <value>MP3 Player</value>
                <value>Reproduz Música</value>
                <value>Reproduz Vídeo</value>
                <value>Viva Voz</value>
            </item>
            <item label="Slots de Expansão">
                <value>MicroSD</value>
            </item>
        </specification>
    </product>
    <product id="291221" eco="false" hasMetaSearch="false" categoryId="77" totalSellers="19" fullDescription="false">
        <productName>LG C310 GSM Desbloqueado</productName>
        <productShortName>LG C310 Desbloqueado</productShortName>
        <currency abbreviation="BRL"/>
        <priceMin>224.10</priceMin>
        <priceMax>399.00</priceMax>
        <links>
            <link type="product" url="http://compare.buscape.com.br/lg-c310-gsm-desbloqueado.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="specification" url="http://compare.buscape.com.br/prod_ficha?idu=291221"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?productId=291221&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <thumbnail url="http://imagem.buscape.com.br/thumbs/ensopado/77/200x200_291221_1.jpg"/>
        <rating>
            <userAverageRating>
                <numComments>20</numComments>
                <rating>9.0</rating>
                <links>
                    <link type="xml" url="http://sandbox.buscape.com/service/viewUserRatings/5a2f6f786f61782b62314d3d/br/?productId=291221&amp;keyword=celular&amp;sourceId=9262544"/>
                </links>
            </userAverageRating>
        </rating>
        <specification>
            <links>
                <link type="xml" url="http://sandbox.buscape.com/service/viewProductDetails/5a2f6f786f61782b62314d3d/br/?productId=291221&amp;keyword=celular&amp;sourceId=9262544"/>
            </links>
            <item label="Câmera">
                <value>2.0 MP</value>
            </item>
            <item label="Funções Extras">
                <value>Gravador de Vídeo</value>
                <value>Java</value>
                <value>MP3 Player</value>
                <value>Reproduz Música</value>
                <value>Reproduz Vídeo</value>
                <value>Viva Voz</value>
            </item>
            <item label="3G">
                <value>Não</value>
            </item>
            <item label="Slots de Expansão">
                <value>MicroSD</value>
            </item>
            <item label="Tipos de Conexão">
                <value>Bluetooth</value>
                <value>EDGE</value>
                <value>GPRS</value>
                <value>Micro-USB</value>
                <value>WAP</value>
            </item>
        </specification>
    </product>
    <product id="323632" eco="false" hasMetaSearch="false" categoryId="77" totalSellers="19" fullDescription="false">
        <productName>LG Optimus Me P350 GSM Desbloqueado</productName>
        <productShortName>LG Optimus Me P350 Desbloqueado</productShortName>
        <currency abbreviation="BRL"/>
        <priceMin>359.32</priceMin>
        <priceMax>499.00</priceMax>
        <links>
            <link type="product" url="http://compare.buscape.com.br/lg-optimus-me-p350-gsm-desbloqueado.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="specification" url="http://compare.buscape.com.br/prod_ficha?idu=323632"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?productId=323632&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <thumbnail url="http://imagem.buscape.com.br/thumbs/ensopado/77/200x200_323632_1.jpg"/>
        <rating>
            <userAverageRating>
                <numComments>8</numComments>
                <rating>7.0</rating>
                <links>
                    <link type="xml" url="http://sandbox.buscape.com/service/viewUserRatings/5a2f6f786f61782b62314d3d/br/?productId=323632&amp;keyword=celular&amp;sourceId=9262544"/>
                </links>
            </userAverageRating>
        </rating>
        <specification>
            <links>
                <link type="xml" url="http://sandbox.buscape.com/service/viewProductDetails/5a2f6f786f61782b62314d3d/br/?productId=323632&amp;keyword=celular&amp;sourceId=9262544"/>
            </links>
            <item label="Câmera">
                <value>3.0 MP</value>
            </item>
            <item label="Funções Extras">
                <value>Comando de Voz</value>
                <value>Gravador de Vídeo</value>
                <value>Java</value>
                <value>MP3 Player</value>
                <value>Rádio</value>
                <value>Reproduz Música</value>
                <value>Reproduz Vídeo</value>
                <value>Visualizador de Documentos</value>
                <value>Viva Voz</value>
            </item>
            <item label="3G">
                <value>Sim</value>
            </item>
            <item label="Slots de Expansão">
                <value>MicroSD</value>
            </item>
            <item label="Tipos de Conexão">
                <value>Bluetooth</value>
                <value>EDGE</value>
                <value>GPRS</value>
                <value>Micro-USB</value>
                <value>Wi-Fi</value>
            </item>
        </specification>
    </product>
    <product id="340287" eco="false" hasMetaSearch="false" categoryId="77" totalSellers="19" fullDescription="false">
        <productName>Nokia C2-00 GSM Desbloqueado</productName>
        <productShortName>Nokia C2-00 Desbloqueado</productShortName>
        <currency abbreviation="BRL"/>
        <priceMin>179.10</priceMin>
        <priceMax>249.00</priceMax>
        <links>
            <link type="product" url="http://compare.buscape.com.br/nokia-c2-00-gsm-desbloqueado.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="specification" url="http://compare.buscape.com.br/prod_ficha?idu=340287"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?productId=340287&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <thumbnail url="http://imagem.buscape.com.br/thumbs/ensopado/77/200x200_340287_1.jpg"/>
        <rating>
            <userAverageRating>
                <numComments>8</numComments>
                <rating>7.4</rating>
                <links>
                    <link type="xml" url="http://sandbox.buscape.com/service/viewUserRatings/5a2f6f786f61782b62314d3d/br/?productId=340287&amp;keyword=celular&amp;sourceId=9262544"/>
                </links>
            </userAverageRating>
        </rating>
        <specification>
            <links>
                <link type="xml" url="http://sandbox.buscape.com/service/viewProductDetails/5a2f6f786f61782b62314d3d/br/?productId=340287&amp;keyword=celular&amp;sourceId=9262544"/>
            </links>
            <item label="Câmera">
                <value>Sim</value>
            </item>
            <item label="Funções Extras">
                <value>Comando de Voz</value>
                <value>Gravador de Vídeo</value>
                <value>MP3 Player</value>
                <value>Rádio</value>
                <value>Reproduz Música</value>
                <value>Reproduz Vídeo</value>
                <value>Viva Voz</value>
            </item>
            <item label="Slots de Expansão">
                <value>MicroSD</value>
            </item>
        </specification>
    </product>
    <product id="255505" eco="true" hasMetaSearch="false" categoryId="77" totalSellers="18" fullDescription="false">
        <productName>Nokia N8 GSM Desbloqueado</productName>
        <productShortName>Nokia N8 Desbloqueado</productShortName>
        <currency abbreviation="BRL"/>
        <priceMin>764.10</priceMin>
        <priceMax>1559.00</priceMax>
        <links>
            <link type="product" url="http://compare.buscape.com.br/nokia-n8-gsm-desbloqueado.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="specification" url="http://compare.buscape.com.br/prod_ficha?idu=255505"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?productId=255505&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <thumbnail url="http://imagem.buscape.com.br/thumbs/ensopado/77/200x200_255505_1.jpg"/>
        <rating>
            <userAverageRating>
                <numComments>115</numComments>
                <rating>7.8</rating>
                <links>
                    <link type="xml" url="http://sandbox.buscape.com/service/viewUserRatings/5a2f6f786f61782b62314d3d/br/?productId=255505&amp;keyword=celular&amp;sourceId=9262544"/>
                </links>
            </userAverageRating>
        </rating>
        <specification>
            <links>
                <link type="xml" url="http://sandbox.buscape.com/service/viewProductDetails/5a2f6f786f61782b62314d3d/br/?productId=255505&amp;keyword=celular&amp;sourceId=9262544"/>
            </links>
            <item label="Câmera">
                <value>12.0 MP</value>
            </item>
            <item label="Funções Extras">
                <value>Comando de Voz</value>
                <value>Gravador de Vídeo</value>
                <value>Gravador de Voz</value>
                <value>Java</value>
                <value>Loja Online de Aplicativos</value>
                <value>MP3 Player</value>
                <value>Rádio</value>
                <value>Reproduz Música</value>
                <value>Reproduz Vídeo</value>
                <value>Videoconferência</value>
                <value>Visualizador de Documentos</value>
                <value>Viva Voz</value>
            </item>
            <item label="3G">
                <value>Sim</value>
            </item>
            <item label="Slots de Expansão">
                <value>MicroSD</value>
            </item>
            <item label="Tipos de Conexão">
                <value>Bluetooth</value>
                <value>EDGE</value>
                <value>Fone de Ouvido</value>
                <value>GPRS</value>
                <value>HDMI</value>
                <value>USB</value>
                <value>WAP</value>
                <value>Wi-Fi</value>
            </item>
        </specification>
    </product>
    <product id="321040" eco="false" hasMetaSearch="false" categoryId="77" totalSellers="18" fullDescription="false">
        <productName>Motorola Atrix GSM Desbloqueado</productName>
        <productShortName>Motorola Atrix Desbloqueado</productShortName>
        <currency abbreviation="BRL"/>
        <priceMin>1259.10</priceMin>
        <priceMax>1999.00</priceMax>
        <links>
            <link type="product" url="http://compare.buscape.com.br/motorola-atrix-gsm-desbloqueado.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="specification" url="http://compare.buscape.com.br/prod_ficha?idu=321040"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?productId=321040&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <thumbnail url="http://imagem.buscape.com.br/thumbs/ensopado/77/200x200_321040_1.jpg"/>
        <rating>
            <userAverageRating>
                <numComments>19</numComments>
                <rating>7.6</rating>
                <links>
                    <link type="xml" url="http://sandbox.buscape.com/service/viewUserRatings/5a2f6f786f61782b62314d3d/br/?productId=321040&amp;keyword=celular&amp;sourceId=9262544"/>
                </links>
            </userAverageRating>
        </rating>
        <specification>
            <links>
                <link type="xml" url="http://sandbox.buscape.com/service/viewProductDetails/5a2f6f786f61782b62314d3d/br/?productId=321040&amp;keyword=celular&amp;sourceId=9262544"/>
            </links>
            <item label="Câmera">
                <value>5.0 MP</value>
            </item>
            <item label="Funções Extras">
                <value>Comando de Voz</value>
                <value>Gravador de Vídeo</value>
                <value>Gravador de Voz</value>
                <value>Java</value>
                <value>MP3 Player</value>
                <value>Reproduz Música</value>
                <value>Reproduz Vídeo</value>
                <value>Visualizador de Documentos</value>
                <value>Viva Voz</value>
                <value>Webcam</value>
            </item>
            <item label="3G">
                <value>Sim</value>
            </item>
            <item label="Slots de Expansão">
                <value>MicroSD</value>
            </item>
            <item label="Tipos de Conexão">
                <value>Bluetooth</value>
                <value>EDGE</value>
                <value>GPRS</value>
                <value>HDMI</value>
                <value>USB</value>
                <value>Wi-Fi</value>
            </item>
        </specification>
    </product>
    <product id="237698" eco="false" hasMetaSearch="false" categoryId="77" totalSellers="17" fullDescription="false">
        <productName>LG GX200 GSM Desbloqueado</productName>
        <productShortName>LG GX200 Desbloqueado</productShortName>
        <currency abbreviation="BRL"/>
        <priceMin>211.36</priceMin>
        <priceMax>299.00</priceMax>
        <links>
            <link type="product" url="http://compare.buscape.com.br/lg-gx200-gsm-desbloqueado.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="specification" url="http://compare.buscape.com.br/prod_ficha?idu=237698"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?productId=237698&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <thumbnail url="http://imagem.buscape.com.br/thumbs/ensopado/77/200x200_237698_1.jpg"/>
        <rating>
            <userAverageRating>
                <numComments>231</numComments>
                <rating>8.4</rating>
                <links>
                    <link type="xml" url="http://sandbox.buscape.com/service/viewUserRatings/5a2f6f786f61782b62314d3d/br/?productId=237698&amp;keyword=celular&amp;sourceId=9262544"/>
                </links>
            </userAverageRating>
        </rating>
        <specification>
            <links>
                <link type="xml" url="http://sandbox.buscape.com/service/viewProductDetails/5a2f6f786f61782b62314d3d/br/?productId=237698&amp;keyword=celular&amp;sourceId=9262544"/>
            </links>
            <item label="Câmera">
                <value>1.3 MP</value>
            </item>
            <item label="Funções Extras">
                <value>Gravador de Vídeo</value>
                <value>Gravador de Voz</value>
                <value>Java</value>
                <value>MP3 Player</value>
                <value>Rádio</value>
                <value>Reproduz Música</value>
                <value>Reproduz Vídeo</value>
                <value>Viva Voz</value>
            </item>
            <item label="3G">
                <value>Não</value>
            </item>
            <item label="Slots de Expansão">
                <value>MicroSD</value>
            </item>
            <item label="Tipos de Conexão">
                <value>Bluetooth</value>
                <value>Fone de Ouvido</value>
                <value>GPRS</value>
                <value>USB</value>
                <value>WAP</value>
            </item>
        </specification>
    </product>
    <product id="315391" eco="false" hasMetaSearch="false" categoryId="77" totalSellers="17" fullDescription="false">
        <productName>Samsung S5260 Star II GSM Desbloqueado</productName>
        <productShortName>Samsung S5260 Star II Desbloqueado</productShortName>
        <currency abbreviation="BRL"/>
        <priceMin>313.66</priceMin>
        <priceMax>399.00</priceMax>
        <links>
            <link type="product" url="http://compare.buscape.com.br/samsung-s5260-star-ii-gsm-desbloqueado.html?mdsrc=9262544&amp;mdapp=1159&amp;mddtn=51922611"/>
            <link type="specification" url="http://compare.buscape.com.br/prod_ficha?idu=315391"/>
            <link type="xml" url="http://sandbox.buscape.com/service/findOfferList/5a2f6f786f61782b62314d3d/br/?productId=315391&amp;keyword=celular&amp;sourceId=9262544"/>
        </links>
        <thumbnail url="http://imagem.buscape.com.br/thumbs/ensopado/77/200x200_315391_1.jpg"/>
        <rating>
            <userAverageRating>
                <numComments>25</numComments>
                <rating>8.2</rating>
                <links>
                    <link type="xml" url="http://sandbox.buscape.com/service/viewUserRatings/5a2f6f786f61782b62314d3d/br/?productId=315391&amp;keyword=celular&amp;sourceId=9262544"/>
                </links>
            </userAverageRating>
        </rating>
        <specification>
            <links>
                <link type="xml" url="http://sandbox.buscape.com/service/viewProductDetails/5a2f6f786f61782b62314d3d/br/?productId=315391&amp;keyword=celular&amp;sourceId=9262544"/>
            </links>
            <item label="Câmera">
                <value>3.2 MP</value>
            </item>
            <item label="Funções Extras">
                <value>Gravador de Vídeo</value>
                <value>Gravador de Voz</value>
                <value>Java</value>
                <value>MP3 Player</value>
                <value>Rádio</value>
                <value>Reproduz Música</value>
                <value>Reproduz Vídeo</value>
                <value>Visualizador de Documentos</value>
                <value>Viva Voz</value>
            </item>
            <item label="3G">
                <value>Não</value>
            </item>
            <item label="Slots de Expansão">
                <value>MicroSD</value>
            </item>
            <item label="Tipos de Conexão">
                <value>Bluetooth</value>
                <value>EDGE</value>
                <value>GPRS</value>
                <value>USB</value>
                <value>WAP</value>
                <value>Wi-Fi</value>
            </item>
        </specification>
    </product>
</Result>
XML;
        
        $args     = array('keyword' => $keyword);
        //$response = $this->getClient()->findProductList($args);
        $response = $products;
        $nodes    = array('product');
        $return   = array();
        
        if ( ! $response) {
            return null;
        }
        
        $xml = new \SimpleXMLElement($response);
        
        foreach ($xml as $name=>$item) {
            if (!in_array($name, $nodes)) { continue; }
            
            $prod             = new Product();
            $prod->id         = (string) $item['id'];
            $prod->categoryId = (string) $item['categoryId'];
            $prod->currency   = (string) $item->currency['abbreviation'];
            $prod->maxPrice   = (string) $item->priceMax;
            $prod->minPrice   = (string) $item->priceMin;
            $prod->name       = (string) $item->productName;
            $prod->totalSellers = (string) $item['totalSellers'];
            
            foreach ($item->links as $links) {
				foreach ($links as $link) {
					$type = (string) $link['type'];
					
					if ($type != 'product') { continue; }
					
					$prod->link = (string) $link['url'];
					
					break 2;
				}
            }
            
            $return[] = $prod;
        }
        return $return;
    }
    
    
}