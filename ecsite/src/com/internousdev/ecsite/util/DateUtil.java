package com.internousdev.ecsite.util;

import java.text.SimpleDateFormat;
import java.util.Date;

public class DateUtil {

	public String getDate() {
		Date date = new Date();
		SimpleDateFormat simpleDateFormat = new SimpleDateFormat("yyyy/MM/dd HH:mm:ss");
		System.out.println(simpleDateFormat.format(date));
		return simpleDateFormat.format(date);
	}

}
