(function($) {
  /**
   * Korean language package
   */
  FormValidation.I18n = $.extend(true, FormValidation.I18n, {
    'ko_KR': {
      base64: {
        'default': '유효한 Base64 인코드를 입력해주세요'
      },
      between: {
        'default': '%s와 %s사이에 입력해 주세요',
        notInclusive: '엄밀히 %s와 %s사이에 입력해주세요'
      },
      callback: {
        'default': '유효 수치를 입력해주세요'
      },
      choice: {
        'default': '유효 수치를 입력해주세요',
        less: '최소 %s부터 선택해주세요',
        more: '최대 %s까지 선택해주세요',
        between: '%s - %s 에서 선택해주세요'
      },
      color: {
        'default': '유효한 컬러 코드를 입력해주세요'
      },
      creditCard: {
        'default': '결제 가능한 신용카드 번호를 입력해주세요'
      },
      cusip: {
        'default': '유효한 CUSIP번호를 입력해주세요'
      },
      cvv: {
        'default': '유효한 CVV번호를 입력해주세요'
      },
      date: {
        'default': '유효한 날짜를 입력해주세요',
        min: '%s 다음에 유효한 날짜를 입력해주세요',
        max: '%s 앞에 유효한 날짜를 입력해주세요',
        range: '%s - %s 사이에 유효한 날짜를 입력해주세요'
      },
      different: {
        'default': '다른 값을 입력해주세요'
      },
      digits: {
        'default': '숫자로만 입력해주세요'
      },
      ean: {
        'default': '유효한 EAN코드를 입력해주세요'
      },
      emailAddress: {
        'default': '유효한 메일주소를 입력해주세요'
      },
      file: {
        'default': '유효한 파일을 선택해주세요'
      },
      greaterThan: {
        'default': '%s보다 큰 값을 입력해주세요',
        notInclusive: '%s보다 큰 값을 입력해주세요'
      },
      grid: {
        'default': '유효한 GRId코드를 입력해주세요'
      },
      hex: {
        'default': '유효한 16진수를 입력해주세요'
      },
      hexColor: {
        'default': '유효한 컬러코드(RGB 16진수)를 입력해주세요'
      },
      iban: {
        'default': '유효한 IBAN코드를 입력해주세요',
        countryNotSupported: '국가 코드 %s는 지원되지 않습니다',
        country: '유효한%s의 IBAN코드를 입력해주세요',
        countries: {
          AD: '안도라',
          AE: '아랍수장국연방',
          AL: '알바니아',
          AO: '앙카라',
          AT: '오스트리아',
          AZ: '아제르바이잔',
          BA: '보스니아 헤르체고비나',
          BE: '벨기에',
          BF: '부르키나파소',
          BG: '불가리아',
          BH: '바레인',
          BI: '부룬디',
          BJ: '베냉',
          BR: '브라질',
          CH: '스위스',
          CI: '코트디부아르',
          CM: '카메룬',
          CR: '코스타리카',
          CV: '카보베르데',
          CY: '키프로스',
          CZ: '체코 공화국',
          DE: '독일',
          DK: '덴마크',
          DO: '도미니카 공화국',
          DZ: '알제리',
          EE: '에스토니아',
          ES: '스페인',
          FI: '핀란드',
          FO: '페로 제도',
          FR: '프랑스',
          GB: '영국',
          GE: '그루지야',
          GI: '지브롤터',
          GL: '그린란드',
          GR: '그리스',
          GT: '과테말라',
          HR: '크로아티아',
          HU: '헝가리',
          IE: '아일랜드',
          IL: '이스라엘',
          IR: '이란',
          IS: '아이슬란드',
          IT: '이탈리아',
          JO: '요르단',
          KW: '쿠웨이트',
          KZ: '카자흐스탄',
          LB: '레바논',
          LI: '리히텐슈타인',
          LT: '리투아니아',
          LU: '룩셈부르크',
          LV: '라트비아',
          MC: '모나코',
          MD: '모르도바',
          ME: '몬테네그로',
          MG: '마다가스카르',
          MK: '마케도니아',
          ML: '말리',
          MR: '모리타니아',
          MT: '몰타',
          MU: '모리셔스',
          MZ: '모잠비크',
          NL: '네덜란드',
          NO: '노르웨이',
          PK: '파키스탄',
          PL: '폴란드',
          PS: '팔레스타인',
          PT: '포르투갈',
          QA: '카타르',
          RO: '루마니아',
          RS: '세르비아',
          SA: '아라비아',
          SE: '스웨덴',
          SI: '슬로베니아',
          SK: '슬로바키아',
          SM: '산 마리노',
          SN: '세네갈',
          TN: '튀니지',
          TR: '터키',
          VG: '버진 제도'
        }
      },
      id: {
        'default': '유효한 ID를 입력해주세요',
        countryNotSupported: '국가 코드 %s는 지원되지 않습니다',
        country: '유효한%s ID를 입력해주세요',
        countries: {
          BA: '보스니아 헤르체고비나',
          BG: '불가리아',
          BR: '브라질',
          CH: '스위스',
          CL: '칠레',
          CN: '중국',
          CZ: '체코 공화국',
          DK: '덴마크',
          EE: '에스토니아',
          ES: '스페인',
          FI: '핀란드',
          HR: '크로아티아',
          IE: '아일랜드',
          IS: '아이슬란드',
          LT: '리투아니아',
          LV: '라트비아',
          ME: '몬테네그로',
          MK: '마케도니아',
          NL: '네덜란드',
          RO: '루마니아',
          RS: '세르비아',
          SE: '스웨덴',
          SI: '슬로베니아',
          SK: '슬로바키아',
          SM: '산 마리노',
          TH: '태국',
          ZA: '남아프리카'
        }
      },
      identical: {
        'default': '동일한 값을 입력해주세요'
      },
      imei: {
        'default': '유효한 IMEI을 입력해주세요'
      },
      imo: {
        'default': '유효한 IMO를 입력해주세요'
      },
      integer: {
        'default': '유효한 수치를 입력해주세요'
      },
      ip: {
        'default': '유효한 IP주소를 입력해주세요',
        ipv4: '유효한 IPv4주소를 입력해주세요',
        ipv6: '유효한 IPv6주소를 입력해주세요'
      },
      isbn: {
        'default': '유효한 ISBN번호를 입력해주세요'
      },
      isin: {
        'default': '유효한 ISIN번호를 입력해주세요'
      },
      ismn: {
        'default': '유효한 ISMN번호를 입력해주세요'
      },
      issn: {
        'default': '유효한 ISSN번호를 입력해주세요'
      },
      lessThan: {
        'default': '%s미만의 값을 입력해주세요',
        notInclusive: '%s미만의 값을 입력해주세요'
      },
      mac: {
        'default': '유효한 MAC주소를 입력해주세요'
      },
      meid: {
        'default': '유효한 MEID번호를 입력해주세요'
      },
      notEmpty: {
        'default': '이 필드는 필수 입력 항목입니다.'
      },
      numeric: {
        'default': '유효한 부동소수점수치를 입력해주세요。'
      },
      phone: {
        'default': '유효한 전화번호를 입력해주세요',
        countryNotSupported: '국가 코드 %s는 지원되지 않습니다',
        country: '유효한%s 전화번호를 입력해주세요',
        countries: {
          BR: '브라질',
          CN: '중국',
          CZ: '체코 공화국',
          DE: '독일',
          DK: '덴마크',
          ES: '스페인',
          FR: '프랑스',
          GB: '영국',
          MA: '모로코',
          PK: '파키스탄',
          RO: '루마니아',
          RU: '러시아',
          SK: '슬로바키아',
          TH: '태국',
          US: '미국',
          VE: '베네수엘라'
        }
      },
      regexp: {
        'default': '정규 표현에 일치하는 값을 입력해주세요'
      },
      remote: {
        'default': '유효한 값을 입력해주세요。'
      },
      rtn: {
        'default': '유효한 RTN번호를 입력해주세요'
      },
      sedol: {
        'default': '유효한 SEDOL번호를 입력해주세요'
      },
      siren: {
        'default': '유효한 SIREN 번호를 입력해주세요'
      },
      siret: {
        'default': '유효한 SIRET번호 입력해주세요'
      },
      step: {
        'default': '%s의 유효한 단계를 입력해주세요'
      },
      stringCase: {
        'default': '소문자로만 입력해주세요',
        upper: '대문자로만 입력해주세요'
      },
      stringLength: {
        'default': '유효한 길이의 값을 입력해주세요',
        less: '%s문자 미만으로 입력해주세요',
        more: '%s문자 보다 큰 값을 입력해주세요',
        between: '%s자에서 %s자 이내로 입력해주세요'
      },
      uri: {
        'default': '유효한 URI를 입력해주세요。'
      },
      uuid: {
        'default': '유효한 UUID를 입력해주세요',
        version: '유효한 버젼%s UUID을 입력해주세요'
      },
      vat: {
        'default': '유효한 VAT번호를 입력해주세요',
        countryNotSupported: '국가 코드 %s는 지원되지 않습니다',
        country: '유효한%s 의 VAT번호를 입력해주세요',
        countries: {
          AT: '오스트리아',
          BE: '벨기에',
          BG: '불가리아',
          BR: '브라질',
          CH: '스위스',
          CY: '키프로스',
          CZ: '체코 공화국',
          DE: '독일',
          DK: '덴마크',
          EE: '에스토니아',
          ES: '스페인',
          FI: '핀란드',
          FR: '프랑스',
          GB: '영국',
          GR: '그리스',
          EL: '그리스',
          HU: '헝가리',
          HR: '크로아티아',
          IE: '아일랜드',
          IS: '아이슬란드',
          IT: '이탈리아',
          LT: '리투아니아',
          LU: '룩셈부르크',
          LV: '라트비아',
          MT: '몰타',
          NL: '네덜란드',
          NO: '노르웨이',
          PL: '폴란드',
          PT: '포르투갈',
          RO: '루마니아',
          RU: '러시아',
          RS: '세르비아',
          SE: '스웨덴',
          SI: '슬로베니아',
          SK: '슬로바키아',
          VE: '베네수엘라',
          ZA: '남아프리카'
        }
      },
      vin: {
        'default': '유효한 VIN번호를 입력해주세요'
      },
      zipCode: {
        'default': '유효한 우편번호를 입력해주세요',
        countryNotSupported: '국가 코드 %s는 지원되지 않습니다',
        country: '유효한 %s의 우편번호를 입력해주세요',
        countries: {
          AT: '오스트리아',
          BR: '브라질',
          CA: '캐나다',
          CH: '스위스',
          CZ: '체코 공화국',
          DE: '독일',
          DK: '덴마크',
          FR: '프랑스',
          GB: '영국',
          IE: '아일랜드',
          IT: '이탈리아',
          MA: '모로코',
          NL: '네덜란드',
          PT: '포르투갈',
          RO: '루마니아',
          RU: '러시아',
          SE: '스웨덴',
          SG: '싱가포르',
          SK: '슬로바키아',
          US: '미국'
        }
      }
    }
  });
}(jQuery));
