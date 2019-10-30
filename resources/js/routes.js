let routes=[
  {
    path: '/',
    name: '',
    component: require('./components/mobile/content/indexJobhun.vue').default
  },
  {
    path: '/tentangJobhun',
    name: '',
    component: require('./components/mobile/content/tentangJobhun.vue').default
  },
  {
    path: '/jobhun-careerHub',
    name: 'jobhunCareerHub',
    component: require('./components/mobile/content/layanan/jobhunCareerHub').default
  },
  //button posting loker
  
  // {
  //   path: '/pasang-loker',
  //   name: 'pasangLoker',
  //   component: require ('./components/content/pasangLoker').default
  // },
  {
    path: '/jobhun-academy',
    name: 'jobhunAcademy',
    component: require('./components/mobile/content/layanan/jobhunAcademy').default
  },
  
  // DetailJobhun Academy
  {
    path: '/content-writer',
    name: 'ContentWriter',
      component: require('./components/mobile/content/layanan/jobhunacademy/contentWriter').default
  },
  
  {
    path: '/jobhun-mediaPatner',
    name: 'jobhunMediaPatner',
    component: require('./components/mobile/content/layanan/jobhunMediaPatner').default
  },
  {
    path: '/formMediaPartner',
    name: 'formMediaPatner',
    component: require('./components/mobile/content/layanan/formMediaPartner').default
  },
  {
    path: '/jobhun-talentPool',
    name: 'jobhunTalentPool',
    component: require('./components/mobile/content/layanan/jobhunTalentPool').default
  },
  //program
  
  //pasangLoker
  {
    path: '/pasang-loker',
    name: 'pasangLoker',
    component: require('./components/mobile/content/pasangLoker').default
  },
  {
    path: '/carrerHubPrem',
    name: 'Carrerhubpremium',
    component: require('./components/mobile/content/carrerHubPrem').default
  },
  {
    path: '/carrerHubReg',
    name: 'carrerHubReg',
    component: require('./components/mobile/content/carrerHubReg').default
  }
  ];
  export default routes
  
  // Coba
  
  