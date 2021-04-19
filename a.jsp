import org.apache.commons.io.IOUtils;   

@RequestMapping(value="/getImage.do")
 	public void getImage( HttpServletRequest request, HttpServletResponse response) 
                                      throws Exception {
        // TODO Auto-generated method stub
		response.setContentType("application/jpeg");
		String url = "tutorial_answer.jpg";
		String filename = request.getParameter("filename");  
	
		URL fileUrl = new URL(url+filename);
	    IOUtils.copy( fileUrl.openStream(), response.getOutputStream());
    } 
