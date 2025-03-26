var dd = {
    content: [
      { text: 'Health and Family Welfare Department', style: 'header' },
      { text: 'Government of West Bengal', style: 'subheader' },
      { text: 'UPHC-1, Suri Municipality, Birbhum, W.B.', style: 'subheader' },
      { text: 'Pathology Report', style: 'reportTitle' },
      { text: 'Patient Details:', style: 'sectionHeader' },
      { text: 'Name: ...........................    Age: .......................   Sex: .......................' },
      { text: 'Regd. No.: ...........................   Ward No.: .......................' },
      { text: 'Date: ...........................' },
  
      // Hematology
      { text: 'HAEMATOLOGY', style: 'sectionHeader' },
      {
        table: {
          widths: ['*', '*', '*'],
          body: [
            ['Test', 'Result', 'Normal value'],
            ['Hb', '', 'M-13.2-17.3 gm/dl\nF-11.7-15.3 gm/dl'],
            ['Total Count (TC)', '', '4000-11000/cumm'],
            ['N', '', '40-70%'],
            ['L', '', '20-40%'],
            ['M', '', '2-8%'],
            ['E', '', '0-6%'],
            ['B', '', '0-1%'],
            ['Platelet', '', '1,50,000 - 4,50,000/cumm'],
            ['Malarial Slide (Thick/Thin)', '', 'Negative']
          ]
        },
        margin: [0, 0, 0, 10]
      },
  
      // Biochemistry
      { text: 'BIOCHEMISTRY', style: 'sectionHeader' },
      {
        table: {
          widths: ['*', '*', '*'],
          body: [
            ['Test', 'Result', 'Normal value'],
            ['Fasting Sugar', '', '70 - 110 mg/dl'],
            ['PP Sugar', '', 'Upto 140 mg/dl'],
            ['Random Sugar', '', 'Variable'],
            ['Urea', '', '10-50 mg/dl'],
            ['Creatinine', '', 'M: 0.6-1.5 mg/dl\nF: 0.6-1.4 mg/dl'],
            ['Uric Acid', '', 'M: 3.4-7.0 mg/dl\nF: 2.4-5.7 mg/dl']
          ]
        },
        margin: [0, 0, 0, 10]
      },
  
      // Serology
      { text: 'SEROLOGY', style: 'sectionHeader' },
      {
        table: {
          widths: ['*', '*'],
          body: [
            ['Test', 'Result'],
            ['VDRL', 'NR'],
            ['HBs Ag', 'POS/NEG'],
            ['HCV', 'POS/NEG'],
            ['HIV', 'NR'],
            ['Malaria (RKD)', 'POS/NEG'],
            ['Blood Group', 'A/B/AB/O'],
            ['Pregnancy Test', 'POS/NEG']
          ]
        },
        margin: [0, 0, 0, 10]
      },
  
      // Liver Function Test
      { text: 'LIVER FUNCTION TEST (LFT)', style: 'sectionHeader' },
      {
        table: {
          widths: ['*', '*', '*'],
          body: [
            ['Test', 'Result', 'Normal value'],
            ['Total Bilirubin', '', '0.1-1.2 mg/dl'],
            ['Direct Bilirubin', '', '0.0-0.3 mg/dl'],
            ['Indirect Bilirubin', '', '0.1-0.9 mg/dl'],
            ['SGPT', '', '5-40 IU/L'],
            ['SGOT', '', '5-40 IU/L'],
            ['Alkaline Phosphatase', '', '40-125 IU/L'],
            ['Total Protein', '', '6.4-8.3 gm/dl'],
            ['Albumin', '', '3.5-5.0 gm/dl'],
            ['Globulin', '', '2.3-3.5 gm/dl']
          ]
        },
        margin: [0, 0, 0, 10]
      },
  
      // Widal Test
      { text: 'WIDAL TEST', style: 'sectionHeader' },
      {
        table: {
          widths: ['*', '*'],
          body: [
            ['Antigen', 'Result'],
            ['S. Typhi O', ''],
            ['S. Typhi H', ''],
            ['S. Para Typhi AH', ''],
            ['S. Para Typhi BH', '']
          ]
        },
        margin: [0, 0, 0, 10]
      },
  
      // Urine RE
      { text: 'URINE RE', style: 'sectionHeader' },
      {
        table: {
          widths: ['*', '*'],
          body: [
            ['Test', 'Observation'],
            ['Colour', ''],
            ['Appearance', ''],
            ['Reaction', ''],
            ['Specific Gravity', ''],
            ['Protein', ''],
            ['Glucose', ''],
            ['Ketone', ''],
            ['Bilirubin', ''],
            ['Urobilinogen', ''],
            ['Pus Cells', ''],
            ['RBC', ''],
            ['Epithelial Cells', ''],
            ['Casts', ''],
            ['Crystals', ''],
            ['Others', '']
          ]
        },
        margin: [0, 0, 0, 10]
      },
  
      // Signatures
      { text: 'Signature of Lab Technician', margin: [0, 30, 0, 0] },
      { text: 'Signature of Medical Officer', alignment: 'right' }
    ],
  
    styles: {
      header: { fontSize: 14, bold: true, alignment: 'center' },
      subheader: { fontSize: 12, alignment: 'center' },
      reportTitle: { fontSize: 13, bold: true, alignment: 'center', decoration: 'underline', margin: [0, 10, 0, 10] },
      sectionHeader: { bold: true, margin: [0, 10, 0, 5] }
    },
  
    defaultStyle: {
      fontSize: 9
    }
  };
  