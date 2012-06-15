/*
* Licensed to the Apache Software Foundation (ASF) under one or more
* contributor license agreements.  See the NOTICE file distributed with
* this work for additional information regarding copyright ownership.
* The ASF licenses this file to You under the Apache License, Version 2.0
* (the "License"); you may not use this file except in compliance with
* the License.  You may obtain a copy of the License at
*
*     http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*/
/* $Id: HelloWorldExample.java 500674 2007-01-27 23:15:00Z markt $
 *
 */
package com.jslearn.servlet;

import java.io.*;
import java.net.URL;
import java.net.URLConnection;
import java.net.URLDecoder;
import java.net.URLEncoder;
import java.util.*;
import javax.servlet.*;
import javax.servlet.http.*;

/**
 * The simplest possible servlet.
 *
 * @author James Duncan Davidson
 */

public class HelloWorldExample extends HttpServlet {


    public void doGet(HttpServletRequest request,
                      HttpServletResponse response)
            throws IOException, ServletException {
        ResourceBundle rb =
                ResourceBundle.getBundle("LocalStrings", request.getLocale());
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();

        out.println("<html>");
        out.println("<head>");

        String title = rb.getString("helloworld.title");

        out.println("<title>" + title + "</title>");
        out.println("</head>");
        out.println("<body bgcolor=\"white\">");

        // note that all links are created to be relative. this
        // ensures that we can move the web application that this
        // servlet belongs to to a different place in the url
        // tree and not have any harmful side effects.

        // XXX
        // making these absolute till we work out the
        // addition of a PathInfo issue

        out.println("<a href=\"../helloworld.html\">");
        out.println("<img src=\"../images/code.gif\" height=24 " +
                "width=24 align=right border=0 alt=\"view code\"></a>");
        out.println("<a href=\"../index.html\">");
        out.println("<img src=\"../images/return.gif\" height=24 " +
                "width=24 align=right border=0 alt=\"return\"></a>");
        out.println("<h1>" + title + "</h1>");
        out.println("</body>");
        out.println("</html>");
    }

    public void run() {
        try {
            //init data
            String sessionId = null;
            String partnerCode = null;
            String secretKey = null;
            String userId = null;

            String data = "";
            data += URLEncoder.encode("partner-code", "UTF-8") + "=" + URLEncoder.encode(partnerCode, "UTF-8");
            data += "&" + URLEncoder.encode("secret-key", "UTF-8") + "=" + URLEncoder.encode(secretKey, "UTF-8");
            data += "&" + URLEncoder.encode("session-id", "UTF-8") + "=" + URLEncoder.encode(sessionId, "UTF-8");
            data += "&" + URLEncoder.encode("user-id", "UTF-8") + "=" + URLEncoder.encode(userId, "UTF-8");
            System.out.println("request data:" + data);

            URL url = new URL("http://fp.payegis.net:12321/tulando-api/rest/device/relevant-device");
            URLConnection conn = url.openConnection();
            conn.setDoOutput(true);
            OutputStreamWriter wr = new OutputStreamWriter(conn.getOutputStream());
            wr.write(data);
            wr.flush();

            BufferedReader rd = new BufferedReader(new InputStreamReader(conn.getInputStream()));
            String line;
            while ((line = rd.readLine()) != null) {
                String decoded_line = URLDecoder.decode(line, "UTF-8");
                System.out.println("response data:" + decoded_line);
            }
            wr.close();
            rd.close();
        } catch (Exception e) {
            e.printStackTrace();
        }

    }
}



