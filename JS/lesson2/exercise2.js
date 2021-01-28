function randomNumberUnder100() {
  const numbersSpelledHAHA = `nolla,yksi,kaksi,kolne,neljö,viisi,kuusi,
  seitsemän,kahdeksan,ykdeksän,kymmenen,yksitoista,kaksitoista,
  kolmetoista,neljätoista,viisitoista,kuusitoista,seitsemäntoista,
  kahdeksantoista,yhdeksäntoista,kaksikymmentä,kaksikymmentäyksi,
  kaksikymmentäkaksi,kaksikkymmentäkolme,kaksikymmentäneljä,
  kaksikymmentäviisi,kaksikymmentäkuusi,kaksikymmentäseitsemän,
  kaksikymmentäkahdeksa,kaksikymmentäyhdeksä,kolmekymmentä,
  kolmekymmentäyksi,kolmekymmentäkaksi,kolmekymmentäkolme,
  kolmekymmentäneljä,kolmekymmentäviisi,kolmekymmentäkuusi,
  kolmekymmentäseitsemän,kolmekymmentäkahdeksan,kolmekymmentäyhdeksän,
  neljäkymmentä, neljäkymmentäyksi,neljäkymmentäkaksi,neljäkymmentäkolme,
  neljäkymmentäneljä,neljäkymmentäviisi,neljäkymmentäkuusi,
  neljäkymmentäseitsemän,neljäkymmentäkahdeksan,neljäkymmentäyhdeksän,
  viisikymmentä,viisikymmentäyksi,viisikymmentäkaksi,viisikymmentäkolme,
  viisikymmentäneljä,viisikymmentäviisi,viisikymmentäkuusi,
  viisikymmentäseitsemän,viisikymmentäkahdeksan,viisikymmentäyhdeksän,
  kuusikymmentä,kuusikymmentäyksi,kuusikymmentäkaksi,kuusikymmentäkolme,
  kuusikymmentäneljä,kuusikymmentäviisi,kuusikymmentäkuusi,
  kuusikymmentäseitsemän,kuusikymmentäkahdeksan,kuusikymmentäyhdeksän,
  seitsemänkymmentä,seitsemänkymmentäyksi,seitsemänkymmentäkaksi,
  seitsemänkymmentäkolme,seitsemänkymmentäneljä,seitsemänkymmentäviisi,
  seitsemänkymmentäkuusi,seitsemänkymmentäseitsemän,seitsemänkymmtäkahdeksan,
  seitsemänkymmentäyhdeksän,kahdeksankymmentä,kahdeksankymmentäyksi,
  kahdeksankymmentäkaksi,kahdeksankymmentäkolme,kahdeksankymmentäneljä,
  kahdeksankymmentäviisi,kahdeksankymmentäkuusi,kahdeksankymmentäseitsemän,
  kahdeksankymmentäkahdeksan,kahdeksankymmentäyhdeksän,yhdeksänkymmentä,
  yhdeksänkymmentäyksi,yhdeksänkymmentäkaksi,yhdeksänkymmentäkolme,
  yhdeksänkymmentäneljä,yhdeksänkymmentäviisi,yhdeksänkymmentäkuusi,
  yhdeksänkymmentäseitsemän,yhdeksänkymmentäkahdeksan,yhdeksänkymmentäyhdeksän,
  sata`; // cba didnt want to use my brainpower so did it manually ;D fu.
        // no liability on me for spelling mistakes.
  
  let yourRandomNumber = Math.round(Math.random() * 100);
  return numbersSpelledHAHA.split(',')[yourRandomNumber].trim();
}

randomNumberUnder100()